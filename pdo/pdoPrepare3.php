<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/13
 * Time: 17:57
 */
//采用预处理SQL执行查询，并采用绑定结果方式输出
//1.连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=myapp", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}
//print_r($pdo);

//2.预处理的SQL语句
$sql = "select id, name, age from users";
$stmt = $pdo->prepare($sql);


//3.执行
$stmt->execute();

/*foreach ($stmt as $row){
    echo $row['id']."-----".$row['name']."-----".$row['age']."<br>";
}*/
$stmt->bindColumn(1, $id);
$stmt->bindColumn(2, $name);
$stmt->bindColumn("age", $age);
while ($row=$stmt->fetch(PDO::FETCH_COLUMN)){
    echo "{$id}:{$name}:{$age}<br>";
}