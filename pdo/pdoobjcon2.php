<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/13
 * Time: 17:00
 */

//1.连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=myapp;", "root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));

}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}

//2.简洁查询 这是一种快捷操作方式
/*$sql = "select * from users";

foreach ($pdo->query($sql) as $val){
    echo $val['id']."----".$val['name']."----".$val['age']."<br>";
}*/

//数据插入
//$sql = "insert into users VALUES (null, '沈峰','25')";
//数据删除
//$sql = "delete from users where id=3";
//修改数据
$sql = "update users set name='driverS' where id = 4";
$res = $pdo->exec($sql);
if($res){
    echo "success";
}