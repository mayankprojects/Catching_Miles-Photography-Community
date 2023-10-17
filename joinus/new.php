<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype = "multipart/form-data">
        <input type="file" name="upload">
        <input type="submit">
    </form>
</body>
</html>

<?php
    $filename = $_FILES["upload"]["name"];
    $tempname = $_FILES["upload"]["tmp_name"];
    $folder = "images/".$filename;
    echo $folder;
    move_uploaded_file($tempname, $folder);
?>