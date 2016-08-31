<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/19
 * Time: 15:28
 */
include "../../class/MySqlClass.php";
$mysql        = new Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
$updateValues = [ //获取更新之后的值
    "contactName"    => $_POST['contactName'],
    "contactAddress" => $_POST['contactAddress'],
    "mobilePhone"    => $_POST['mobilePhone'],
    "fixedPhone"     => $_POST['fixedPhone'],
    "fax"            => $_POST['fax'],
    "copyright"      => $_POST['copyright'],
    "number"         => $_POST['number'],
    "owner"          => $_POST['owner'],
    "version"        => $_POST['version'],
    "email"          => $_POST['email'],
];
$contactId = [
    "contactId" => "1", //因为联系的信息只有一条，所以指定id号进行数据的更新操作
];
$mysql->update("contact", $updateValues, $contactId); //调用更新的方法，三个参数
header("Location:../contactUs.php"); //更新成功后跳转回原来的页面
