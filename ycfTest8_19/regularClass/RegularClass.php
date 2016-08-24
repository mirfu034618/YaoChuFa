<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/22
 * Time: 11:51
 */
namespace Ycf\Lession\RegularClass;

class RegularClass
{
    /**
     * 以字母开始，以数字结束，并且没有空格的单元
     */
    public function regularArray($regular, $values)
    {
        $grep = preg_grep($regular, $values);
        return $grep;
    }

    /**
     * 使用正则取出URL中的协议，URL中的主机，URL中的域名，URL中的文件名
     */
    public function regularUrl($regular, $values)
    {
        $values = trim($values); //排除空格
        preg_match($regular, $values, $matches);
        return $matches;
    }

    /**
     * 用正则取出字符串里的所有网址
     */
    public function regularStringUrl($regular, $values)
    {
        preg_match_all($regular, $values, $matches);
        return $matches;
    }

    /**
     * 用正则去掉所有html标签
     */
    public function regularHtml($regular, $replacement = '', $values)
    {
        return preg_replace($regular, $replacement, $values);
    }
}
