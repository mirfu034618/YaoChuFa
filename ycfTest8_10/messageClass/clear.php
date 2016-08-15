<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/15
 * Time: 11:19
 */
header("content-type:text/html;charset=utf-8");
$file = 'test.txt';
$txt  = '';
if (file_put_contents($file, $txt) !== false) {
    echo "<script>alert('您的文件已清空');location.href='../message.php';</script>";
} else {
    echo "清空文件失败!\n";
}
