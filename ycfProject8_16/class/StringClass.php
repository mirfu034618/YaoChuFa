<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/9
 * Time: 14:41
 */
class StringClass
{
    /**
     * 作业1，将1112223334445转换成5,444,333,222,111
     */
    public function division($str)
    {
        $newStr = ''; //定义空字符串$newStr
        $arr    = str_split($str);
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            $newStr .= $arr[$i];
        }
        return $newStr;
    }

    /**
     * 作业2，将字符串www.yaochufa.com处理后输出moc.afuhcoay.
     */
    public function demo($str)
    {
        $str1 = strstr($str, '.');
        $str2 = strrev($str1);
        return $str2;
    }

    /**
     * 作业3，将字符串my_leader转换成MyLeader
     */
    public function stringCapital($str)
    {
        $arr = str_word_count($str, 1); //返回一个包含字符串中全部单词的数组
        for ($i = 0; $i < count($arr); $i++) { //计算数组中单词的个数
            $array[$i] = ucfirst($arr[$i]); //将每一个单词的首字母改成大写
        }
        return implode("", $array); //将一个一维数组的值转化成字符串
    }

    /**
     * 作业4，提取邮箱的域
     */
    public function emailDomain($str)
    {
        $str1 = strstr($str, "@"); //将@字符以及之后的所有字符串全部输出
        $str2 = substr($str1, 1); //去掉第一个字符
        return $str2;
    }

    /**
     * 作业5，翻转字符串中的单词
     */
    public function arrayStr($str)
    {
        return str_word_count($str, 1);
    }

    public function filpString($str)
    {
        $arr = $this->arrayStr($str);
        for ($i = 2; $i >= 0; $i--) {
            $test[] = $arr[$i];
        }
        $es = implode(" ", $test);
        return $es;
    }

    /**
     * 作业6，对多余字符串的处理
     */
    public function substr($str)
    {
        $len = strlen($str);
        if ($len < 21) { //判断字符长度，小于21则直接输出
            return $str;
        } else {
            return mb_substr($str, 0, 21) . '...'; //当字符长度大于21时，则从第1位到第21开始读取，多余的用...代替
        }
    }
}
