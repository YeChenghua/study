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
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/1
 * Time: 15:59
 */
