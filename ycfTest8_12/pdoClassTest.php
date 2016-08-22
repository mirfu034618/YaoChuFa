<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/22
 * Time: 9:37
 */
include "pdoClass/PdoClass.php";
$pdo = new PdoClass();
$pdo->construct("mysql:host=192.168.222.132;dbname=ManagerTest", "root", "fufangjie");

//$insertValues = [
//    'userNo'      => '20130015',
//    'userName'    => '防擦u',
//    'currentUnit' => '超高压公司',
//    'age'         => '21',
//];
//$pdo->insert('user', $insertValues);

print_r($pdo->fetchAll("select * from user"));
