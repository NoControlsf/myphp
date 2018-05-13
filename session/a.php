<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 20:58
 */

session_start();
if (isset($_SESSION['name'])){
    echo $_SESSION['name'];
}else{
    echo 'No name found';
}
