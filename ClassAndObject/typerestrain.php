<?php
//类型约束示例
class MyClass
{
    //第一个参数必须为对象
    public function test(OtheraClass $otherclass)
    {
        echo $otherclass->var;
    }

    //第一个参数必须为数组
    public function test_array(array $input_array)
    {
        print_r($input_array);
    }

    //第一个参数必须为递归类型
    public function test_interface(Traversable $iterator)
    {
        echo get_class($iterator);
    }

    //第一个参数必须为回调类型
    public function test_callable(callable $callable, $data)
    {
        call_user_func($callback, $data);
    }
}
    class OtherClass{
    public $var='Hellow World';
}

$myclass=new MyClass;
$otherclass=new OtherClass;

$myclass->test($otherclass);

$myclass->test_array(array('a','b','c'));

$myclss->test_interface(new ArrayObject(array()));

$myclass->test_callable('var_dump',1);

//类型约束用在函数中
class YourClass{
    public $var='Hello world';
}

//测试函数中，第一个参数必须是YourClass的一个对象
function YourFunction(YourClass $foo){
    echo $foo->var;
}

$yourclass-new YourClass;
YourFunction($yourclass);
?>





/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/16
 * Time: 15:33
 */