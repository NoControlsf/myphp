<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/5
 * Time: 9:31
 */

$arr = array();
//下标添加元素
/*$arr[0] = 'Hello';
$arr[1] = 'World';
$arr[2] = 2;
$arr[3] = 3.14;*/
//函数添加元素
/*for ($i = 0;$i < 100;$i++){
    array_push($arr, 'Item '.$i);
}*/
//键值对添加元素
$arr['h'] = 'Hello';
$arr['w'] = 'World';

print_r($arr);
echo '<br>';
echo $arr['h'];


echo '<br>';
//数组键值对初始化赋值
$arr2 = array('h' => 'Hello', 'w' => 'World', 'name' => 'NC');
print_r($arr2);

//数组下标初始化  同时存放也可以
$arr3 = array(0 => 'like', 1=>'iwen','h' => 'Hello');
echo '<br>';
print_r($arr3);
echo '<br>';
echo $arr3[0];

















