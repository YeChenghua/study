<?php
namespace MyProject;

echo'"',__NAMESPACE__,'"';
function get($classname){
    $a=__NAMESPACE__.'\\'.$classname;
    return new $a;
}
namespace MyProject;
use blah\blah as mine;

blah\mine();
namespace\blah\mine();

namespace\func();
namespace\sub\func();
namespace\cname::method();
$a=new namespace\sub\cname();
$b=namespace\CONSTANT;
?>
/* Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/19
 * Time: 16:27
 */