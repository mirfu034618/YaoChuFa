<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 22:16
 */
header("Content-type:text/html;charset=utf-8");
include "../class/CookieClass.php";
include "../class/MySqlClass.php";
$cookies = new \Ycf\Lession\Cookie\CookieClass();
$mysql   = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");

$adminValues = [
    "adminName" => $_POST['userName'],
    "adminPwd"  => $_POST['password'],
];

if (!empty($mysql->select("admin", $adminValues))) {
    if ($_GET["action"] == "login") { //如果action为login的话，则进行登陆验证
        $name = $_POST['userName'];
        $pwd  = $_POST['password'];
        $cookies->delete($name); //调用cookie类中的delete方法实现cookie的删除
        if ($name != "" && $pwd != "") {
            $cookies->set("userName", $name, time() + 60 * 60 * 24);
            $cookies->set("isLogin", "1", time() + 60 * 60 * 24); //定义isLogin用来检查用户是否登陆
            header("Location:index.php");
        }
    }
} else if ($_GET["action"] == "logout") { //当action为logout时，进行删除cookie，并返回登陆页面
    $cookies->delete('isLogin'); //当获取到用户退出的操作时，删除cookie中缓存的用户名信息
    header("Location:login.php"); //返回登陆页面
} else {
    echo "<script>alert('用户名或密码错误');location.href='login.php';</script>";
}
