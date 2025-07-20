<?php
$videos = json_decode(file_get_contents("videos.json"), true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ziiax Admin Panel</title>
    <style>
        body { font-family: Arial; padding: 20px; max-width: 900px; margin: auto; background: #f9f9f9; }
        h2 { color: #6c5ce7; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: left; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        form { background: #fff; padding: 20px; border: 1px solid #ccc; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 10px; }
        button { background: #6c5ce7; color: white; padding: 10px 20px; border: none; cursor: pointer; }
        .delete-btn { color: red; text-decoration: none; }
    </style>
</head>
<body>
<h2>Existing Videos</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Duration</th>
        <th>Views</th>
        <th>Likes</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($videos as $video): ?>
    <tr>
        <td><?php echo $video['id']; ?></td>
        <td><?php echo $video['title']; ?></td>
        <td><?php echo $video['duration']; ?></td>
        <td><?php echo $video['views']; ?></td>
        <td><?php echo $video['likes']; ?></td>
        <td><a href="delete.php?id=<?php echo $video['id']; ?>" class="delete-btn">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Add New Video</h2>
<form method="POST" action="add.php">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="text" name="duration" placeholder="Duration (e.g. 0:15)" required>
    <input type="url" name="videoUrl" placeholder="Video URL" required>
    <input type="url" name="thumbnail" placeholder="Thumbnail URL" required>
    <input type="text" name="views" placeholder="Views (e.g. 2.1M)" required>
    <input type="text" name="likes" placeholder="Likes (e.g. 89K)" required>
    <button type="submit">Add Video</button>
</form>
</body>
</html>
