<?php
// 设置 Cookie
setcookie("cookie[three]", "cookiethree");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[one]", "cookieone");

// 网页刷新后，打印出以下内容
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}
?>
/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/12/3
 * Time: 21:13
 */