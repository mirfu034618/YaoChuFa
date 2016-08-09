<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/5
 * Time: 12:05
 */
include "SortClass\ArraySort.php";

$arr = [5, -4, -5, -100, 8, -10, -3, -2, 4, 7, 34];

$sort = new ArraySort();

//$arrSort = $sort->bubbleSort($arr);
$arrSort = $sort->insertSort($arr);
//$arrSort = $sort->quickSort($arr);
//$arrSort = $sort->choiceSort($arr);
//$arrSort = $sort->shellSort($arr);

var_dump($arrSort);
