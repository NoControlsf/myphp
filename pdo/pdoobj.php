<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/13
 * Time: 16:13
 */
//普通方式创建数据库对象
//$mysql = new mysqli("localhost", "user", "password", "dbname");
//pdo方式创建数据库对象
try{
    //方法1
    //$pdo = new PDO("mysql:host=localhost;dbname=myapp", "root", "");
    //方法2：是uri 不是url
    $pdo = new PDO("uri:mysqlPdo.ini", "root", "");
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}
    echo $pdo->getAttribute(PDO::ATTR_SERVER_VERSION);

//print_r($pdo);