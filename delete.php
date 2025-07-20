<?php
if (isset($_GET["id"])) {
    $file = "videos.json";
    $videos = json_decode(file_get_contents($file), true);
    $videos = array_filter($videos, function ($v) {
        return $v["id"] != $_GET["id"];
    });
    file_put_contents($file, json_encode(array_values($videos), JSON_PRETTY_PRINT));
}
header("Location: index.php");
?>
