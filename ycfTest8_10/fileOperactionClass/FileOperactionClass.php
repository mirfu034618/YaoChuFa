<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 10:21
 */
class FileOperactionClass
{
    public function fileTraversal($file_path)
    {
        $files = array(); //定义一个数组用来接收
        if (is_dir($file_path)) {
            if ($handle = opendir($file_path)) {
                while (($file = readdir($handle)) !== false) {
                    if ($file != "." && $file != "..") //排除根目录
                    {
                        if (is_dir($file_path . "/" . $file)) //如果是子文件夹，就进行递归
                        {
                            $files[$file] = $this->fileTraversal($file_path . "/" . $file);
                        } else //不然就将文件的名字存入数组
                        {
                            $files[] = $file_path . "/" . $file;
                        }
                    }
                }
                closedir($handle); //资源关闭
                return $files;
            }
        }
    }

    public function deleteFile($file_path)
    {
        $del = opendir($file_path);
        while ($file = readdir($del)) {
            if ($file != "." && $file != "..") { //先排除文件根目录
                $path_name = $file_path . "/" . $file;
                if (is_dir($path_name)) {
                    $this->deleteFile($path_name); //如果给定的是一个目录则继续循环
                } else {
                    unlink($path_name); //删除文件
                }
            }
        }
        closedir($del);
        if (rmdir($file_path)) { //用remdir函数判断是否是目录，如果是，则删除
            return true;
        } else {
            return false;
        }
    }
}
