<!DOCTYPE html>
<html>
<head>
    <title>File uploader</title>
</head>
<body>

    <form action="../imgAdd.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="title" value="unknown">
        <br>
        <input type="text" name="author" placeholder="author" value="unknown">
        <br>
        <input type="text" name="watermarkText" placeholder="watermark text" required>
        <br>
        <input type="file" name="img" required>
        <input type="submit">
    </form>

    <a href="views/imgGallery_view.php">Gallery</a>
</body>
</html>

<?php
