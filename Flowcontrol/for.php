<?php
for($i=1;$i<=10;$i++){
    echo $i;
}

for($i=1;$i++){
    if($i>10){
        break;
    }
    echo $i;
}

$i=1;
for(;;){
    if($i>10){
        break;
    }
    echo$i;
    $i++;
}

for($i=1,$j=0;$i<=10;$j+=$i,print $i,$i++);
?>

/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/7
 * Time: 22:09
 */