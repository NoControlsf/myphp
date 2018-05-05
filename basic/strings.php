<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/5
 * Time: 9:12
 */

$str = 'Hello PHP';
echo $str.'<br>';

//字符位置下标
echo strpos($str, 'o').'<br>';
echo strpos($str, 'PH').'<br>';

//截取字符串 参数：字符串 起始位置 长度
$str1 = substr($str,2,3);
//不加长度默认截取到末尾
$str2 = substr($str,2);
echo $str1.'<br>';
echo $str2.'<br>';

//分割字符串
$result = str_split($str);
$result2 = str_split($str, 2);
//数组打印方式
print_r($result);
echo '<br>';
print_r($result2);
echo '<br>';
$str = 'Hello PHP Java C# C++';
$result3 = explode(' ', $str);
print_r($result3);
echo '<br>';

//字符串连接
$num = 100;
$str2 = $str.'<br>Objective-C'.$num;
echo $str2.'<br>';
echo '####################<br>';
$str2 = "$str<br>Objective-C $num";
echo $str2;



















