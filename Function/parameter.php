//向函数传递数组
<?php
function takes_array($input){
    echo"$input[0]+$input[1]=",$input[0]+$input[1];
}
?>

//在函数中使用引用传递
<?php
function add_some_extra (&$string){
    $string.='add something extra.';
    }
    $str='This is a string,';
   add_some_extra($sting);
   echo $str;
?>

//在函数中使用默认参数
<?php
function makecoffee($type="cappuccino"){
    return "Making a coffee of $type.\n";

}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
?>

//使用非标量类型作为默认参数
<?php
function makecoffee1($types=array("cappucciono"),$coffeemaker){
    $device=is_null($coffeemaker)?"hands":$coffeemaker;
    return"Making a cup of".join(",",$types)."with $device.\n";

}
echo makecoffee1();
echo makecoffee1(array("cappucciono","lavazza"),"teapot");
?>

//函数默认参数正确的用法
<?php
function makeyogurt($flavour, $type = "acidophilus")
{
    return "Making a bowl of $type $flavour.\n";
}

echo makeyogurt("raspberry");   // works as expected
?>


/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/9
 * Time: 18:37
 */