<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/19
 * Time: 9:21
 */
include "../../class/MySqlClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set("PRC");
if ($_POST['userAdd'] != "" && $_POST['passwordAdd'] != "") {

    $adminWhere = [
        "adminName" => $_POST['userAdd'],
    ];
    $adminValues = $mysql->select("admin", $adminWhere);

    if ($_POST['userAdd'] === $adminValues['adminName']) {
        echo "<script>alert('账号已存在');location.href='../userList.php';</script>";
    } else {
        $insertValues = [
            "adminName" => $_POST['userAdd'],
            "adminPwd"  => $_POST['passwordAdd'],
            "adminReg"  => date("Y-m-d h:i:s", time()),
            "adminIp"   => $_SERVER['SERVER_ADDR'],
        ];
        $mysql->insert("admin", $insertValues);
        header("Location:../userList.php");
    }
} else {
    header("Location:../userList.php");
}
