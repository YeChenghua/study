<?php
$c=mysql_conncet();
echo get_resource_type($c)."\n";
//打印：mysql link
$fp=fopen("foo","w");
echo get_resource_type($fp)."\n";
//打印: file
$doc=new_xmldoc("1.0");
echo get_resource_type($doc->doc)."\n";
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/5
 * Time: 14:03
 */