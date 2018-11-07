<?php
//合法的常量名
define("FOO","something");
define("Foo2","something else");
define("Foo_BAR","something more");

//非法的常量名
define("2FOO","something");

//合法但不建议使用
define("__FOO__","something");
?>

//使用关键字const定义常量
<?php
const CONSTANT='Hello world';
echo CONSTANT;
?>

<?php


/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/6
 * Time: 10:21
 */