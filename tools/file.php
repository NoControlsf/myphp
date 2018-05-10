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
 * Time: 16:31
 */
//write data

/*$f = @fopen('data', 'w');
if($f){
    fwrite($f, 'Hello PHP');
    fclose($f);

    echo 'OK';
}else{
    echo '创建文件失败';
}*/

//read data
/*$f = @fopen('data', 'r');

while ((!feof($f))) {
    $content = fgets($f);//只读取一行
}
echo $content;


fclose($f);*/

//get content
echo file_get_contents('data');

?>
</body>
</html>
