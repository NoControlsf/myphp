<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/13
 * Time: 18:07
 */
//采用预处理+事务处理执行SQL操作
//1.连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=myapp", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND=>"set names utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE,2);
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}

//print_r($pdo);
//2.执行数据操作
try{
    //开启事务
    $pdo->beginTransaction();
    $sql = "insert into users(id, name, age) VALUES (?,?,?)";
    $stmt = $pdo->prepare($sql);
    //传入参数
    $stmt->execute(array(null, "test4", 11));
    $stmt->execute(array(11, "test5", 11));
    $stmt->execute(array(null, "test3", 11));
    //提交事务
    $pdo->commit();
    echo "OK";
}catch (PDOException $e){
    die("执行失败".$e->getMessage());
    $pdo->roolback();
}