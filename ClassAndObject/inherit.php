<?php
//继承示例
class foo8
{
    public function printItem($string)
    {
        echo'Foo:'.$string.PHP_EOL;
    }

    public function printPHP(){
        echo'PHP is great.'.PHO_EOL;
    }
}
class bar8 extends foo8{
    public function printItem($string){
        echo'Bar:'.$string.PHP_EOL;
    }
}
$foo=new foo8();
$bar=new bar8();
$foo->prinItem('baz');
$foo->printPHP();
$bar->printItem('baz');
$bar->printPHP();
?>

/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/12
 * Time: 14:37
 */