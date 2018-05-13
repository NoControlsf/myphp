<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/11
 * Time: 13:02
 */
require_once 'config.php';

function connectionDb(){
    return mysqli_connect(MYSQL_HOST,MYSQLO_USER,MYSQO_PW,MYSQO_DB);
}