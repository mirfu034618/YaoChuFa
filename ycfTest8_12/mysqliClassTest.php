<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/22
 * Time: 8:52
 */
include "mysqliClass/MysqliClass.php";
mysql_query("set names utf8");
$mysql = new Ycf\Lession\MySqlClass\MysqliClass();
$mysql->connect('localhost', 'root', 'fufangjie', 'ManagerTest');
$insertValues = [
    "userNo"      => "2013006",
    "userName"    => "符符符",
    "currentUnit" => "湖南科技大学",
    "age"         => "29",
];
$mysql->insert($insertValues, 'user');
