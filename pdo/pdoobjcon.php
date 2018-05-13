<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/13
 * Time: 16:28
 */
/**
 * PDO对象成员方法
 * 1）query($sql);//用于执行查询SQL语句。返回PDOStatement对象
 * 2)exec($sql);//用于执行增、删、改操作，返回影响行数；
 * 3）setAttribute();//设置一个“数据库连接对象”属性。
 * 4）fetchAll();//解析数据
 */

//1.连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=myapp;", "root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));

}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}



//2.执行query(查询）返回一个预处理对象
    $sql = "select * from users";
    $stmt = $pdo->query($sql);
    //$list = $stmt->fetchAll();
    //设置获取keyvalue数据 关联数据
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //美化数组
    echo "<pre>";print_r($list);echo "<pre>";

//3.解析数据（把所有数据都解析）
foreach ($list as $val){
    echo $val['id']."----".$val['name']."----".$val['age']."<br>";
}
//4.释放资源
$stmt = null;
$pdo = null;

