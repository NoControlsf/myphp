
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 15:35
 */
//JSON format
//[1,2,5,7,8,"Hello",[6,7,8]]
//{"h": "Hello", "w": "World"}

//encode >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

//$arr = array(1,2,5,8,'Hello', 'jikexueyuan', array('h'=>'Hello', 'name'=>'jikexueyuan'));
//print_r($arr);
//echo json_encode($arr);
//$obj = array('h'=>'Hello', 'w'=>'World',array(3,2,1));
//echo json_encode($obj);

//decode
$jsonStr = '{"h":"Hello","w":"World","0":[3,2,1]}';
$obj = json_decode($jsonStr);
print_r($obj);
echo '<br>';
echo $obj->h;