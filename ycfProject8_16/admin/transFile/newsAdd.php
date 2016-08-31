<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/20
 * Time: 16:17
 */
include "../../class/MySqlClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set("PRC");

$insertValues = [ //获取更新之后的值
    "inforTitle"   => $_POST['title'],
    "inforTime"    => date("Y-m-d h:i:s", time()),
    "inforContent" => $_POST['content'],
    "inforUser"    => $_COOKIE['userName'],
];
$mysql->insert("information", $insertValues); //调用更新的方法，三个参数
header("Location:../newsList.php"); //更新成功后跳转回原来的页面
