<?php
function bool2str($bool){
    if($bool===flase){
        return 'FALSE';
    }
    else{
        return 'True';
    }
}

function compareObjects(&$o1,&$o2){
    echo'o1==o2:'.bool2str($o1==$o2)."\n";
    echo'o1!=o2:'.bool2str($o1!=$o2)."\n";
    echo'o1===o2:'.bool2str($o1===$o2)."\n";
    echo'o1!==o2:'.bool2str($o1！==$o2)."\n";

}

class Flag{
    public $flag;

    function Flag($flag=true){
        $this->flag=$flag;
    }
}

class OtherFlag{
    public $flag;

    function OtherFlag($flag=true){
        $this->flag=$flag;
    }
}

$o=new Flag();
$p=new Flag();
$q=$o;
$r=new OtherFlag();

echo"Two instances of the same class\n";
compareObjects($o,$p);


/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/16
 * Time: 14:56
 */