<?php

/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 14:31
 */
class People{

    /**
     * Man constructor.
     * @param int $age 这个人的年龄
     * @param string $name 这个人的名字
     * @param string $sex 这个人的性别
     */
    public  function __construct($age, $name, $sex){
        //echo 'Construct a Man';
        $this->_age = $age;
        $this->_name = $name;
        $this->_sex = $sex;

        People::$NUM++;

        if(People::$NUM>People::MAX_NUM){
            throw new Exception("不能创建更多的人");
        }
    }

    public function getAge(){
        return $this->_age;
    }

    public function getName(){
        return $this->_name;
    }

    public function getSex(){
        return $this->_sex;
    }


    private $_age,$_name,$_sex;

    private static $NUM = 100;

    const MAX_NUM = 200;//常量

    public static function sayHello(){
        echo 'Hello';
    }

    public function hi(){
        echo $this->_name.'say hi';
    }
}