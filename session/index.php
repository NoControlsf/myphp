<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 20:52
 */

session_start();
$_SESSION['name'] = 'jikexueyuan';
//echo session_id();

//会话销毁
session_destroy();


header('Location:a.php');