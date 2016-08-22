<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/22
 * Time: 9:32
 */
include "mysqlClass/MySqlClass.php";
$mysql = new \Ycf\Lession\MySqlClass\MySqlClass("ManagerTest", "root", "fufangjie");
print_r($mysql->select("user"));
