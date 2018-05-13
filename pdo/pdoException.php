<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/13
 * Time: 17:14
 */
//默认是不提示的 需要用errorCode() errorInfo();
try{
    $pdo = new PDO("mysql:host=localhost;dbname=myapp;", "root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
    //设置报警模式
    #$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    //1也可以
    //$pdo->setAttribute(PDO::ATTR_ERRMODE,1);
    //设置异常模式 最常用
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException$e){
    die("数据库连接失败".$e->getMessage());
}

//print_r($pdo);
$sql = "insert into usersssssss VALUES (null, '沈峰', 25)";

try{
    $res = $pdo->exec($sql);
}catch (PDOException $e){
    echo $e->getMessage();
}
/*$res = $pdo->exec($sql);
  if ($res){
    echo "OK";
}else{
    echo $pdo->errorCode();
    //美化数组
    echo "<pre>";print_r($pdo->errorInfo());echo "<pre>";
}*/
