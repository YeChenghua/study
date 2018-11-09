//有条件的函
<?php
$makefoo=true;
bar();
if($makefoo){
    function foo(){
        echo"I do not exist until program excution reaches me.\n";
     }
}
//makefoo为真后才可以安全调用函数foo()
if($makefoo)
    foo();

function bar(){
    echo"I do not exist until foo() is called";
}
?>

//函数中的函数.
<?php
function foo(){
    function bar(){
        echo"I don not exist until foo() is called.\n";

    }
}
//还不能调用bar函数
foo();
//可以调用bar函数
bar();
?>
//递归函数
<?php
function recursion($a){
    if($a<20){
        echo"$a\n";
        recursion($a+1);
    }
    ?>



/**
 *
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/9
 * Time: 18:23
 */