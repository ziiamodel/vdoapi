<?php
// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Read and return videos
echo file_get_contents("videos.json");
?>
