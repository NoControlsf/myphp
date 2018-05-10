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
 * Time: 17:47
 */
//var_dump($_POST);
if($_POST['a'] && $_POST['b']){
    echo $_POST['a'] + $_POST['b'];
}else{
    echo '请输入参数';
}
?>

</body>
</html>
