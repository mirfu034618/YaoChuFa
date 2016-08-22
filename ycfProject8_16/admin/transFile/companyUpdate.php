<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/20
 * Time: 15:56
 */
include "../../class/MySqlClass.php";
$mysql = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
date_default_timezone_set("PRC");

$updateSet = [ //管理员信息更新的值获取操作
    "companyContent" => $_POST['companyContent'],
    "companyTime"    => date("Y-m-d h:i:s", time()),
];
$updateId = [
    "companyId" => "1", //获取要更新的管理员ID
];
$mysql->update("company", $updateSet, $updateId);
header("Location:../aboutUs.php");
