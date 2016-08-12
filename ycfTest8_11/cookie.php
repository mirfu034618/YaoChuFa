<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 15:18
 */
include "cookieClass/CookieClass.php";

$cookie = new Ycf\Lession\Cookie\CookieClass();

$cookie->set('test', 'yes', 5); //设置cookie的参数

if ($cookie->is('test')) {
    $test = $cookie->get('test'); //获取指定的cookie信息
    echo $test;
}
/*$cookie->delete('test');*///删除cookie
