<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 15:20
 */
//时间戳
//echo time();
//时区
echo date_default_timezone_get();
echo date('Y-m-d H:i:s');
echo '<br>';
date_default_timezone_set('Asia/Shanghai');
echo date_default_timezone_get();
echo date('Y-m-d H:i:s');
echo '<br>';
//时间戳转日期

echo date('Y-m-d H:i:s', time());

echo '<br>';
echo date('Y-m-d H:i:s', '2000');
