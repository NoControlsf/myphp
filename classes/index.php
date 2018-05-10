<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 14:09
 */
/*require_once 'Hello.php';
$h = new Hello();
$h -> sayHello();

$d = new Desktop();
$d ->work();*/

require_once 'jkxy/hl.php';
require_once 'jikexueyuan/hl.php';

$h = new \jikexueyuan\hl();
$h ->sayHello();

echo '<br>';

$h = new jkxy\hl();
$h ->sayHL();

echo '<br>';

require_once 'People.php';
$m = new People(10, 'jikexueyuan', '男');
echo $m->getName();

echo '<br>';
//直接执行类的静态方法
People::sayHello();

//限定构造次数
/*for ($i=0;$i<100;$i++){
    new Man($i, "jikexueyuan");
}*/

require_once 'Man.php';

echo '<br>';

$m = new Man(18, 'zhangsan');
$m->hi();

?>
</body>
</html>
