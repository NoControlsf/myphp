<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 16:49
 */

$img = imagecreate(400,300);
imagecolorallocate($img,255,255,255);

imageellipse($img, 200,200,50,50,imagecolorallocate($img,255,0,0));

header('Content-type: image/png');
imagepng($img);