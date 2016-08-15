<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 22:16
 */
header("Content-type:text/html;charset=utf-8");
include "../cookieClass/CookieClass.php";
$test = new \Ycf\Lession\Cookie\CookieClass();

if ($_GET["action"] == "login") { //如果action为login的话，则进行登陆验证
    $name = $_POST['username'];
    $pwd  = $_POST['userpwd'];
    $test->delete($name); //调用cookie类中的delete方法实现cookie的删除
    if ($name == "admin" && $pwd == "123456") {
        $test->set("username", $_POST['username'], time() + 60 * 60 * 24);
        $test->set("isLogin", "1", time() + 60 * 60 * 24); //定义isLogin用来检查用户是否登陆
        header("Location:index.php");
    } else {
        echo "<script>alert('用户名或密码错误');location.href='login.php';</script>";
    }
} else if ($_GET["action"] == "logout") { //当action为logout时，进行删除cookie，并返回登陆页面
    $test->delete('isLogin');
    header("Location:login.php");
}
