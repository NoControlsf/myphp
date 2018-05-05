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
 * Date: 2018/5/4
 * Time: 23:48
 */

function getLevel($score){
/*    if($score>=90){
        return '优秀';
    }elseif ($score>=80){
        return '良好';
    }elseif ($score>=60){
        return '可以';
    }else{
        return '差';
    }*/

 /*   switch ($score/10){
        case 10;
        case 9;
            return '优秀';
        case 8;
            return '良好';
        case 7;
            return '好';
        case 6;
            return '可以';
        default:
            return '差';
    }*/

    $result =  '优秀';
    switch (intval($score/10)) { //强转int
        case 10;
        case 9;
            $result = '优秀';
            break;
        case 8;
            $result = '良好';
            break;
        case 7;
            $result = '好';
            break;
        case 6;
            $result = '可以';
            break;
        default:
            break;//默认跳出， 可以不写break
    }
    return $result;
}

echo getLevel(70);
?>
</body>
</html>
