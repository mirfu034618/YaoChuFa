<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/23
 * Time: 9:03
 */
include "class/MySqlClass.php";
include "class/UploadFileClass.php";

$mysql  = new Ycf\Lession\MySqlClass\MySqlClass("userinfor", "root", "fufangjie");
$upload = new Ycf\Lession\FileUpload\FileUpload;
//设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
$upload->set("path", "upload/");
$upload->set("maxsize", 2000000);
$upload->set("allowtype", array("gif", "png", "jpg", "jpeg"));
$upload->set("israndname", false);
$upload->upload("pic");
$picName       = $upload->getFileName();
$userinforPath = "upload/" . $picName; //获取文件存储路径

$userName  = $_POST['userName']; //获取表单提交的用户名
$userPwd   = $_POST['userPwd']; //获取表单提交的密码
$userPword = $_POST['userPword']; //获取表单提交的确认密码
$userSex   = $_POST['sex']; //获取表单提交的用户性别
$userLikes = implode(" ", $_POST['likes']); //获取表单提交的爱好，并将数组转换为字符串
$userCity  = $_POST['city']; //获取表单提交的城市名
$userPath  = $userinforPath; //
$persional = $_POST['company']; //获取表单提交的个人简介

if (!empty($userName) && !empty($userPwd)) { //判断表单提交的用户名与密码是否为空
    if ($userPwd !== $userPword) { //当两次输入的密码不一样时，给用户提示
        echo "<script>alert('你两次输入的密码不一样，请重输!');location.href='register.php';</script>";
    } else {
        $insertValues = [
            "userName"  => $userName,
            "userPwd"   => md5($userPwd), //将输入数据库的密码用MD5函数加密
            "userSex"   => $userSex,
            "userLikes" => $userLikes,
            "userCity"  => $userCity,
            "userPath"  => $userPath,
            "persional" => $persional,
        ];
        $mysql->insert("user", $insertValues); //调用mysql类中的insert方法执行数据插入操作
        header("Location:register.php");
    }
} else {
    echo "<script>alert('用户名与密码不能为空!');location.href='register.php';</script>";
}
