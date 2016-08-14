<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 10:21
 */
namespace Ycf\Lssion\FileOperation;

class FileOperactionClass
{
    public function fileTraversal($filePath)
    {
        $files = array(); //定义一个数组用来接收
        if (is_dir($filePath)) {
            if ($handle = opendir($filePath)) {
                while (($file = readdir($handle)) !== false) {
                    if ($file != "." && $file != "..") //排除根目录
                    {
                        if (is_dir($filePath . "/" . $file)) //如果是子文件夹，就进行递归
                        {
                            $files[$file] = $this->fileTraversal($filePath . "/" . $file);
                        } else //不然就将文件的名字存入数组
                        {
                            $files[] = $filePath . "/" . $file;
                        }
                    }
                }
                closedir($handle); //资源关闭
                return $files;
            }
        }
    }

    public function deleteFile($filePath)
    {
        $del = opendir($filePath);
        while ($file = readdir($del)) {
            if ($file != "." && $file != "..") { //先排除文件根目录
                $pathName = $filePath . "/" . $file;
                if (is_dir($pathName)) {
                    $this->deleteFile($pathName); //如果给定的是一个目录则继续循环
                } else {
                    unlink($pathName); //删除文件
                }
            }
        }
        closedir($del);
        if (rmdir($filePath)) { //用remdir函数判断是否是目录，如果是，则删除
            return true;
        } else {
            return false;
        }
    }
}
