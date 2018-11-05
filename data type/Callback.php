<?php
function my_callback_function(){
    echo"hello world!";
}

class MyClass{
    static function myCallbackMethod(){
        echo"hello world";
    }
}
//simple callback
call_user_func('my_callback_function');

//Static class method call
call_user_func(array('MyClass','myCallbackMethod'));

//object method call
$obj=new MyClass();
call_user_func(array($obj,'myCallbackMethod'));

//Static clss method call
call_user_func('MyClass::myCallbackMethod');

// Relative static class
class A{
    public static function who(){
        echo"A\n";
    }
}

class B extends A{
    public static function who(){
        echo"B\n";
    }
}
call_user_func(array('B','parent::who'));


/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/5
 * Time: 14:26
 */