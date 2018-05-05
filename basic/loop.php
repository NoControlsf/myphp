<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/5
 * Time: 0:04
 */
echo 'for循环<br>';
for($i = 0;$i < 10;$i++){
    echo 'Hello '.$i.'<br>';
    /*if($i == 5){
        break;
    }*/

    if($i == 5){
        continue;//跳出当前for循环
    }
    echo 'Run here '.$i.'<br>';
}

echo 'while循环<br>';
$i = 0;
while ($i < 10){
    echo 'Hello '.$i.'<br>';
    $i++;
}

echo 'do while循环<br>';
$i = 0;
do{
    echo 'Hello '.$i.'<br>';
    $i++;
}while($i<10);