<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 11:51
 */

/**
 * Class CounterClass
 * 封装一个简单的文本计数类
 */

namespace Ycf\Lssion\CounterClass;

class CounterClass
{
    public function counter($file)
    {
        while (!is_dir($file)) {
            if (file_exists($file)) {
                $fileNum = fopen($file, "rw");
                $num     = fgets($fileNum);
                fclose($fileNum);
            } else {
                echo "请先创建一个文件用来存放计数值";
            }
            $num++;
            $fileNum = fopen($file, "w");
            fwrite($fileNum, $num);
            fclose($fileNum);
            return $num;
        }

    }
}
