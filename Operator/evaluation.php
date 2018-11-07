//引用赋值
<?php
$a=3;
$b=&$a;

print "$a\n";
print"$b\n";
$a=4;
print"$a\n";
print"$b\n";
?>

/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/6
 * Time: 10:44
 */