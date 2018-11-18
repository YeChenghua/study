<?php
//classa.inc
class A{
    public $one=1;

    public function show_one(){
        echo $this->one;
    }
}

//page1.php

include("classa.inc");

$a=new A;
$s=serialize($a);
file_put_contents('store',$s);

//page2.php
include("class.inc");

$s=file_get_contens('store');
$a=unseriazlize($s);
$a->show_one();

?>


/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/18
 * Time: 20:02
 */