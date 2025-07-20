<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = "videos.json";
    $videos = json_decode(file_get_contents($file), true);

    $newVideo = [
        "id" => count($videos) ? max(array_column($videos, 'id')) + 1 : 1,
        "title" => $_POST["title"],
        "description" => $_POST["description"],
        "duration" => $_POST["duration"],
        "videoUrl" => $_POST["videoUrl"],
        "thumbnail" => $_POST["thumbnail"],
        "views" => $_POST["views"],
        "likes" => $_POST["likes"]
    ];

    $videos[] = $newVideo;
    file_put_contents($file, json_encode($videos, JSON_PRETTY_PRINT));
    header("Location: index.php");
}
?>
