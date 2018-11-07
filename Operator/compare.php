<?php
var_dump(0==="a");
var_dump("1"=="01");
var_dump("10"=="1e1");
var_dump(100=="1e2");
switch("a"){
    case 0:
        echo"0";
        break;
    case "a":
        echo"a";
        break;
}
?>

<?php
var_dump(0=="a");
var_dump("1"=="01");
var_dump("10"=="1e1");
var_dump(100=="1e2");
switch("a"){
    case 0:
        echo"0";
        break;
    case "a":
        echo"a";
        break;

}
?>

<?
//标准数组用标准比较运算符比较
function standard_array_compare($op1,$op2){
    if(count($op1)<count($op2)){
        return -1;
    } elseif(count($op1)>count($op2)){
       return 1;
    }
    foreach ($op1 as $key => $val) {
        if (!array_key_exists($key, $op2)) {
            return null;
        } elseif ($val < $op2[$key]) {
            return -1;
        } elseif ($val > $op2[$key]) {
            return 1;
        }
    }
    return 0;
}
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/6
 * Time: 11:29
 */