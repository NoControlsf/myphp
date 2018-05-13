<?php
require_once 'functions.php'
?>
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
 * Date: 2018/5/11
 * Time: 12:59
 */
header('Content-Type:text/html;charset=utf-8');
$conn = connectionDb();
$conn -> set_charset('utf8');
$res = $conn -> query("SELECT * FROM users");
$dataCount = mysqli_num_rows($res);
//echo $dataCount;
echo "<table width='100%'>
<tr><th>id</th><th>名字</th><th>年龄</th></tr>";
for($i=0;$i<$dataCount;$i++){
    $result_arr = $res -> fetch_assoc();
    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];
    echo "<tr><td>$id</td><td>$name</td><td>$age</td></tr>";
}
echo "</table>"

?>
</body>
</html>
