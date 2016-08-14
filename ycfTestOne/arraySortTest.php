<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/9
 * Time: 11:04
 */
header("Content-type:text/html;charset=utf-8");

include "arraySortClass\ArraySortClass.php";

$data = array(
    0 => array('value' => 67, 'rank' => 2, 'string' => "Alck"),
    1 => array('value' => 86, 'rank' => 1, 'string' => "atest"),
    2 => array('value' => 85, 'rank' => 6, 'string' => "blakc"),
    3 => array('value' => 98, 'rank' => 2, 'string' => "Bank"),
    4 => array('value' => 86, 'rank' => 6, 'string' => "clinhg"),
    5 => array('value' => 67, 'rank' => 7, 'string' => "Arsd"),
);
$array_sort = new ArraySortClass();
$person     = $array_sort->arraySort($data, 'rank'); //设定需要根据数组中哪个键值进行排序
var_dump($person);
