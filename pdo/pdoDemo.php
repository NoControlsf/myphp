<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/5/13
 * Time: 16:06
 */
//echo phpinfo(); 查看开启的方法
//单态类 （目的是为了产生唯一的对象）
class A{
    private static $a = null;
    private function __construct()
    {

    }
    static function makeA(){
        if (self::$a == null){
            self::$a = new self();
        }
        return self::$a;
    }
}
print_r(A::makeA());