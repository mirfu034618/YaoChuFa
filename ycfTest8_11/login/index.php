<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 22:09
 */
header("Content-type:text/html;charset=utf-8");

if (@$_COOKIE['isLogin']) {
    echo "欢迎您:" . $_COOKIE['username'] . "<br />";
    echo "<a href='judge.php?action=logout'>退出</a>" . "<br />";
} else {
    echo "<script>alert('你还没登陆，不能访问首页');location.href='login.php';</script>";
    exit;
}

echo "这是我们要出发的首页";
