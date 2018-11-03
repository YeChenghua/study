<?php
/*
//键（key）可以是一个整数 interger或字符串 string
//值（value）可以是任意类型的值
$array["foo"=>"bar",
    "bar"=>"foo",];
*/
?>

//类型强制与覆盖示例
<?php
$array=array(
  1=>"a",
  "1"=>"b",
  1.5=>"c",
  true=>"d",
);
var_dump($array);
?>

//混合integer和string键名
<?php
$array=array(
"foo"=>"bar",
"bar"=>"foo",
100=>-100,
-100=>100,
);
var_dump($arry);
?>

//访问数组元素
<?php
$array=>array(
    "foo"=>"bar",
    42 => 24,
    "multi"=>array(
        "dimensional"=>array(
            "array"=>"foo"
        )
        )
    );
var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>

//数组解引用
<?php
function getArray(){
    return array(1,2,3);
}
$secondElement=gerArray()[1];
?>

//修改某值，通过键名给单元赋新值。删除某值使用unset()函数
<?php
$arr=array(5=>1,12=>2);
$arr[]=56;
$arr["X"]=42;
unset($arr[5]);
unset($arr);
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/3
 * Time: 14:36
 */