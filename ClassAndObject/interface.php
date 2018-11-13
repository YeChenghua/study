<?php
//接口示例
interface iTemplate
{
    public function setvariable($name,$var);
    public function getHtml($template);
}

class Template implements iTemplate{
    private $vars=array();
    public function setvariable($name,$var){
        $this->vars[$name]=$var;
    }
    public function getHtml($template){
        foreach($this->vars as $name=>$value) {
            $template = str_replace(
                '{' . $name . '}', $value, $template);

        }
        return $template;
}
}

//可扩充的接口
interface aa{
    public function foo();
}

interface bb extends aa{
    public function baz(Baz $baz);
}

class c implements bb{
    public function foo(){

    }
    public function baz(Baz $baz){

    }
}

//继承多个接口
interface aaa{
    public function foo();
}

interface bbb{
    public function bar();
}

interface ccc extends aaa,bbb{
    public function baz();
}

class ddd implements ccc{
    public function foo(){

    }

    public function bar(){

    }

    public function baz(){

    }
}

//使用接口常量
interface aaaa{
const b='Interface constant';
}

echo aaaa::b;

?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/13
 * Time: 16:42
 */