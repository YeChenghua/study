<?php
class classname{
    function __construct(){
        echo __METHOD__."\n";
    }
}
function funcname(){
    echo __FUNCTION__,"\n";
}
const constname="global";

$a='classname';
$obj=new $a;
$b='funcname';
$b();
echo constant('constname'),"\n";
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/19
 * Time: 14:03
 */