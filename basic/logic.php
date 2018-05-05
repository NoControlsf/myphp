<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/5
 * Time: 9:04
 */

function traceNum(){
    /*for($i = 0;$i <= 100;$i++){
        if($i % 2 == 0 && $i % 3 == 0){
            echo $i.'<br>';
        }
    }*/
    for($i = 0;$i <= 100;$i++){
        /*if($i % 2 == 0 || $i % 3 == 0){
            echo $i.'<br>';
        }*/
        if ($i % 2 != 0){
            echo $i.'<br>';
        }
    }
}

traceNum();