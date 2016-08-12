<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 22:16
 */
header("Content-type:text/html;charset=utf-8");

function clearCookie()
{ //编写一个删除cookie的方法
    setcookie("username", "", time() - 3600);
    setcookie("isLogin", "", time() - 3600);
}

if ($_GET["action"] == "login") { //如果action为login的话，则进行登陆验证
    clearCookie();
    $name = $_POST['username'];
    $pwd  = $_POST['userpwd'];
    if ($name == "admin" && $pwd == "123456") {
        setcookie("username", $_POST['username'], time() + 60 * 60 * 24);
        setcookie("isLogin", "1", time() + 60 * 60 * 24); //定义isLogin用来检查用户是否登陆
        header("Location:index.php");
    } else {
        echo "<script>alert('用户名或密码错误');location.href='login.php';</script>";
    }
} else if ($_GET["action"] == "logout") { //当action为logout时，进行删除cookie，并返回登陆页面
    clearCookie();
    header("Location:login.php");
}
