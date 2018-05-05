<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/4
 * Time: 23:37
 */

function traceHelloPHP(){
    echo 'Hello PHP<br>';
    echo 'Hello World<br>';
}
//函数执行方式1
traceHelloPHP();

//函数执行方式2
//$func = 'traceHelloPHP';
//$func();


function sayHelloTo($name){
    echo 'Hello '.$name.'<br>';
}

sayHelloTo('ZhangSan');
sayHelloTo('LiSi');

function traceNum($a,$b){
    //echo 'a = '.$a.' ,b = '.$b.'<br>';
    //写法二 动态性
    echo "a = $a ,b = $b<br>";
}

traceNum(2,3);

function add($a,$b){
    return $a+$b;
}


echo add(10,2).'<br>';







