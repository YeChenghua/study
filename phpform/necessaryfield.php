<?php
$nameErr=$emailErr=$genderErr=$websiteErr="";
$name=$email=$gender=$comment=$website="";

if($_SERVE["REQUST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr="名字是必需的。";
    }else{
        $name=test_input($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailErr="邮箱是必需的。";
    }else{
        $email=test_input($_POST["email"]);
    }

    if(empty($_POST["website"])){
        $website="";
    }else{
        $email=test_input($_POST["email"]);
        }

        if(empty($_POST["comment"])){
        $comment=""
        }else{
        $comment=test_input($_POST["comment"]);
        }

        if(empty($_POST["gender"])){
        $gender="性别是必需的";
        }else{
        $genderErr=test_input($_POST["gender"]);
        }

}
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/26
 * Time: 21:13
 */