<?php
$str=<<<EOD
Example of string
spanning multiple lines
using heredoc syntax
EOD;
class foo
{
    var $foo;
    var $bra;

    function foo()
    {
        $this->foo='Foo';
        $this->bar=array('Bar1','Bar2','Bar3');

    }
}
$foo=new foo();
$name='MyName';

echo<<< EOT
My name is "$name". I am priting some $foo->foo.
Now, I am printing some {$foo->bra[1]}.
This should print a capital 'A': \x41
EOT;
?>

<?php
var_dump(array(<<<EOD
foobar!
EOD
));
?>


<?php
/*
function foo()
{
  static $bar=<<<LABEL
  Nothing in here...
  LABEL;
  }
 class foo
 {
 const BAR=<<<FOOBAR
 constant example
 FOOBAR;
 Public $baz=<<<FOOBAR
 Property example
 FOOBAR;
 }
 */
 ?>

<?php
echo<<<"FOOBAR"
Hello World!
FOOBAR;
?> 

<?php
$str<<<'EOD'
Example of string
spnning multiple lines
using nowdoc syntax.
EOD;

class foo1
{
    public $foo;
    public $bar;

    function foo(){
        $this->foo='Foo';
        $this->bar=array('Bar1','Bar2','Bar3');

    }
}
$foo=new foo();
$name='MyName';
echo<<<'EOT'
My name is "$name".I am printing some $fool->foo.
Now, Iam printing some{$foo->bar[1]}.
This should not print a capital 'A': \x41
EOT;
?>

//静态数据的示例
<?php
class foo2{
    public $bar=<<<'EOT'
bar
EOT;
}
?>
<?php
$juice=array("apple","orange","koolaid1"=>"purple");
echo"He drank some $juices[0] juice.".PHP_EOL;
echo"He drank some $juice[1] juice.".PHP_EOL;
echo"He drank some juice made of $juice[0]s.".PHP_EOL;
echo"He drank some $juices[koolaid1] juice.".PHP_EOL;
class people{
    public $john="John Smith";
    public $jane="Jane Smith";
    public $robert="Robert Paulsen";
    public $smith="Smith";
}
$people=new people();

echo"$people->john drank some $juices[0] juice.".PHP_Eol;
echo"$people->john then said hello to $people->jane.".PHP_EOL;
echo"$people->john's wife greeted $people->robert.".PHP_EOL;
echo "$people->rebert greeted the two $people->smiths.";
?>

//复杂花括号语法
<?php
error_reporting(E_ALL);
$great='fantastic';

//无效，输出：This is {fantastic}
    echo"This is { $gret}";
// 有效，输出： This is fantastic
    echo"This is {$great}";
    echo"This is ${great}";
// 有效
    echo"This square is {$square->width}00 centimeters broad.";
//有效，只有通过花括号语法才能正确解析带引号的键名
    echo "This works: {$arr['key']}";
 //有效
    echo "This works:{$arr[4][3]}";
    echo "This works:{$arr['foo'][3]}";
  //有效
    echo"This works:". $arr['foo'][3];
    echo"This works too:{$obj->values[3]->name}";
    echo"This is the value of the var named $name:{${$name}}";
    echo"This is the value of the var named by the return of getname() {${getname()}}";
    echo"This is the value of the var named by the return of \object->getname():{${$object->gename()}}";
    ?>
//字符串当数组用
<?php
//取得字符串的第一个字节
    $str='This is a test';
    $first=$str[0];
 //取得字符串的第三个字节
    $third=$str[2];
//取得字符串的最后一个字节
    $last=$str[strlen($str)-1];
?>



/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/1
 * Time: 15:59
 */
