<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 14:41
 */
namespace Ycf\Lession\Cookie;

class CookieClass
{
    public function set($name, $value, $time)
    {
        if (is_null($time)) { //如果没有设置cookie保存时间，则默认为5天
            $time = 432000;
        } // + 5 * 24 * 60 * 60
        setcookie($name, $value, time() + $time);
    }
    public function is($name)
    {
        return array_key_exists($name, $_COOKIE);
    }
    public function get($name)
    {
        if (array_key_exists($name, $_COOKIE)) {
            return $_COOKIE[$name];
        } else {
            echo "cookie组中没有你要找的cookie";
        }
    }
    public function delete($name)
    {
        setcookie($name, "", time() - 3600);
    }
}
