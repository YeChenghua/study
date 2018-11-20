<?php
//下拉菜单选
$q=isset($_GET['q'])? htmlspecialchars($_GET['q']):'';
if($q){
    if($q=='RUNOOB'){
        echo '菜鸟教程<br>http://www.runoob.com';
    }else if($q=='GOOGLE'){
        echo 'Google 搜索<br>http://taobao.com';
    }else if($q=='TAOBAO'){
        echo'淘宝<br>http://www.taobao.com';
    }
}else{
    ?>
<form anction="" method="get">
    <select name="q">
        <option value="">选择一个站点：</option>
        <option value="RUNOOB">Runoob</option>
        <option value="GOOGLE">GOOGLE</option>
        <option value-="TAOBAO">TAOBAO</option>
    </select>
    <input type="submit" value="提交">
</form>
<?php
}
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/11/20
 * Time: 20:35
 */