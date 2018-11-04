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

<?php
$array=array(1,2,3,4,5);
print_r($array);

foreach($array as $i=>$value){
    unset($array[$i]);
}
print_r($array);

//重新索引
$array=array_values($array);
$array[]=7;
print_r($array);
?>

//不用给健名为常亮或变量的加上引号
<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('htmil_errors',false);

$array=array(1,2);
$count=count($array);
for($i=0;$i<$count;$i++){
    echo"\nChecking $i:\n";
    echo"Bad:".$array[$i]."\n";
    echo"Good".$array[$i]."\n";
}
?>

<?php
$error_descriptions[E_ERROR]="A fatal error has occured";
$error_descriptions[E_WARNING]="PHP issued a warning";
$error_descriptions[E_NOTICE]="Thi is a information notice";
?>

//在循环中改变单元
<?php
$colors=array('red','blue','green','yellow');
foreach($colors as $color) {
    $color = strtoupper($color);
}
unset($color);
foreach($colors as $key=>$color){
    $colors[$key]=strtoupper($color);
}
print_r($colors);
?>

//填充数组
<?php
$handle=opendir('.');
while(false!==($file=readdir($handle))){
    $file[]=$file;
}
closedir($handle);
?>

<?php
$fruits = array (
    "fruits"  => array( "a" => "orange",
    "b" => "banana",
    "c" => "apple"
    ),
    "numbers" => array ( 1,
        2,
        3,
        4,
        5,
        6
    ),
    "holes"   => array (      "first",
        5 => "second",
        "third"
    )
);
echo $fruits["holes"][5];
echo $fruits["fruits"]["a"];
unset($fruits["holes"][0]);
$juices["apple"]["green"] = "good";
?>

<?php
$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4;
$arr3 = &$arr1;
$arr3[] = 4;
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/3
 * Time: 14:36
 */