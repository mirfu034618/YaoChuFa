<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/20
 * Time: 11:08
 */
include "class/MySqlClass.php";
date_default_timezone_set("PRC");

if ($_POST['messageName'] != "" && $_POST['messageContent'] != "") {
    $mysql          = new \Ycf\Lession\MySqlClass\MySqlClass("jinlin", "root", "fufangjie");
    $messageName    = $_POST['messageName'];
    $messageContent = $_POST['messageContent'];
    $messageTime    = date("Y-m-d h:i:s", time());

    $insertValues = [
        "messageName"    => $messageName,
        "messageTime"    => $messageTime,
        "messageContent" => $messageContent,
    ];

    $insert = $mysql->insert("message", $insertValues);
    echo "<script>alert('留言成功');location.href='guestbook.php';</script>";
} else {
    echo "<script>alert('您没有留言内容');location.href='guestbook.php';</script>";
}
