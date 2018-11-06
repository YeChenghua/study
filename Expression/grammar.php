<?php
function double($i)
{
    return $i*2;
}
$b=$a=5;
$c=$a++;
$e=$d=++$b;
$f=double($d++);
$g=double(++$e);
$h=$g+=10;
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/6
 * Time: 10:32
 */