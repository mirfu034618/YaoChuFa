<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/10
 * Time: 21:43
 */
header("Content-type:text/html;charset=utf-8");
/*
 * 该类的作用实现文件的单个与多个同时上传的功能
 */
class UploadFileClass
{
    protected $user_post_file = array(); //用户上传的文件
    protected $save_file_path; //存放用户上传文件的路径
    protected $last_error; //记录最后一次出错信息
    //默认允许用户上传的文件类型
    protected $allow_type = array('gif', 'jpg', 'png', 'zip', 'rar', 'txt', 'doc', 'pdf', 'docx');
    protected $final_file_path; //最终保存的文件名
    protected $save_info = array(); //返回一组有用信息，用于提示用户。

    /**
     * 构造函数
     */
    public function __construct($file, $path, $size = 2097152, $type = '')
    {
        $this->user_post_file = $file;
        if (!is_dir($path)) { //存储路径文件不存在就创建
            mkdir($path);
            chmod($path, 0777); //创建文件时赋予权限，不然无法对文件进行操作
        }
        $this->save_file_path = $path;
        $this->max_file_size  = $size; //如果用户不填写文件大小，则默认为2M.
        if ($type != '') {
            $this->allow_type = $type;
        }

    }

    /**
     * 存储用户上传文件，检验合法性通过后，存储至指定位置。
     */
    public function upload()
    {

        for ($i = 0; $i < count($this->user_post_file['name']); $i++) {
            //如果当前文件上传功能，则执行下一步。
            if ($this->user_post_file['error'][$i] == 0) {
                //取当前文件名、临时文件名、大小、扩展名，后面将用到。
                $name      = $this->user_post_file['name'][$i];
                $tmpname   = $this->user_post_file['tmp_name'][$i];
                $size      = $this->user_post_file['size'][$i];
                $mime_type = $this->user_post_file['type'][$i];
                $type      = $this->getFileExt($this->user_post_file['name'][$i]);

                //检测当前上传文件扩展名是否合法。
                if (!$this->checkType($type)) {
                    $this->last_error = "Unallowable file type: ." . $type . " File name is: " . $name;
                    continue;
                }
                //检测当前上传文件是否非法提交。
                if (!is_uploaded_file($tmpname)) {
                    $this->last_error = "Invalid post file method. File name is: " . $name;
                    continue;
                }
                //移动文件后，重命名文件用。
                $basename = $this->getBaseName($name, "." . $type);
                //为防止文件名乱码
                $basename = iconv("UTF-8", "gb2312", $basename);
                //移动后的文件名
                $saveas = $basename . time() . "." . $type;
                //组合成最终新文件名再存到指定目录下，格式：存储路径 + 文件名 + 时间 + 扩展名
                $this->final_file_path = $this->save_file_path . "/" . $saveas;
                if (!move_uploaded_file($tmpname, $this->final_file_path)) {
                    $this->last_error = $this->user_post_file['error'][$i];
                    continue;
                }

            }
        }
        return count($this->save_info); //返回上传成功的文件数目
    }

    /**
     * 检测用户提交文件类型是否合法
     */
    public function checkType($extension)
    {
        foreach ($this->allow_type as $type) {
            if (strcasecmp($extension, $type) == 0) {
                return true;
            }
        }
        return false;
    }

    /**
     * 取文件扩展名
     */
    public function getFileExt($filename)
    {
        $stuff = pathinfo($filename);
        return $stuff['extension'];
    }
    /**
     * 取给定文件文件名，不包括扩展名。
     */
    public function getBaseName($filename, $type)
    {
        $basename = basename($filename, $type);
        return $basename;
    }
}

if (!empty($_POST['submit'])) {
    $upload = new UploadFileClass($_FILES['files'], 'upload'); //upload文件与类在同一目录下
    //返回上传成功的文件个数。
    $num = $upload->upload();
    echo "文件上传成功";
} else {
    echo "请检查你上传的文件是否正确";
}
