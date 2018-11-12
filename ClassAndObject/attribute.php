<?php
//属性声明
class SimpleClass{
    public $var6=myConstant;
    public $var7=array(true,false);
    public $var8=<<<'EOD'
hello world
EOD;
}
?>

<?php
class foo{
    //使用Nowdoc初始化属性
    public $bar=<<<'EOT'
bar
EOT;
}
?>

/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/11
 * Time: 20:12
 */