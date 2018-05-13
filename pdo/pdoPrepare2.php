<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/13
 * Time: 17:52
 */
//别名式的预处理语句  一共有3种绑定方式
//1.连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=myapp", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}
//print_r($pdo);

//2.预处理的SQL语句
$sql = "insert into users(id, `name`, age) VALUES (:id,:name,:age)";
$stmt = $pdo->prepare($sql);

//3.对?号的参数绑定 （第一种绑定方式）
/*$stmt->bindValue("id",null);
$stmt->bindValue("name", '周可儿');
$stmt->bindValue("age", 18);*/

//第二种绑定方式
/*$id = null;
$name = "skull";
$age = 17;
$stmt->bindParam("id",$id);
$stmt->bindParam("name",$name);
$stmt->bindParam("age",$age);*/

//第三种绑定方法
//$stmt->execute(array("id"=>null, "name"=>"mona", "age"=>12));

//4.执行
//$stmt->execute();


echo $stmt->rowCount();