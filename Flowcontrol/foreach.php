//通过在$value前加上&来修改数组元素，将用来引用赋值而不是拷贝,仅在被遍历的数组可以被引用时才可用
<?php
$arr=array(1,2,3,4);
foreach($arr as &$value){
    $value=$value*2;
}
unset($value);
?>

//正常的输出
<?php
$arr=array("one","two","three");
reset($arr);
while(list(,$value)=each($arr)){
    echo"Value:$value<br>\n";
}
foreach($arr as $value){
    echo"Value:$value<br/>\n";
}
?>

/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/7
 * Time: 22:20
 */