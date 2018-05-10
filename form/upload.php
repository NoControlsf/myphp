<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 20:09
 */

$file = $_FILES['file'];
$filename = $file['name'];
move_uploaded_file($file['tmp_name'], $filename);

echo "<img src='$filename'>";
?>
</body>
</html>
