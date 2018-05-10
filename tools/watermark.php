<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 16:56
 */
$img = imagecreatefromjpeg('feng.jpg');

//header('Content-type: image.jpeg');
//imagejpeg($img);

//水印参数：图片 字体大小 位置x,y 内容 字体颜色
imagestring($img,5,5,5,'driverS',imagecolorallocate($img, 255,0,0));
//header('Content-type: image/png');

//imagepng($img);
header('Content-type: image.jpeg');
imagejpeg($img);