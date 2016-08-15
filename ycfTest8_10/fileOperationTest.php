<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 10:41
 */

include "fileOperactionClass/FileOperactionClass.php";

$operation = new Ycf\Lssion\FileOperation\FileOperactionClass();
/*echo "<pre>";
print_r($operation->fileTraversal("D:/test")); //调用遍历文件夹的方法
echo "<pre>";*/

$operation->deleteFile("D:/test"); //调用删除方法
