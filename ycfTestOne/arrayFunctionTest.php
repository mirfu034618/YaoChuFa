<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/9
 * Time: 10:56
 */

include "arrayFunctionClass\ArrayFunctionClass.php";

/****************************/
$res = new ArrayFunctionClass();
/****************************/
$arrayChunk     = ['ten', 'two', 'two', 'four', 'five', 'six', 'nice'];
$arrayCombine1  = ['one', 'two', 'ten'];
$arrayCombine2  = ['apple', 'banana', 'org'];
$arrayKeyExists = ['test' => 1, 'second' => 4];
$arrayKeys      = [0 => 100, "color" => "red", "test" => 1, "name" => "bank"];
$arrayMerge1    = ["color" => "red", 2, 4];
$arrayMerge2    = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];
$arrayMultisort = array(
    0 => array('value' => 67, 'rank' => 2, 'string' => "Alck"),
    1 => array('value' => 86, 'rank' => 1, 'string' => "atest"),
    2 => array('value' => 85, 'rank' => 6, 'string' => "blakc"),
    3 => array('value' => 98, 'rank' => 2, 'string' => "Bank"),
    4 => array('value' => 86, 'rank' => 6, 'string' => "clinhg"),
    5 => array('value' => 67, 'rank' => 7, 'string' => "Arsd"),
);
$arrayReplace1 = ["orange", "banana", "apple", "raspberry"];
$arrayReplace2 = [0 => "pineapple", 4 => "cherry"];
$arrayKey      = array(
    0 => "pineapple",
    1 => "cherry",
    2 => "test",
    3 => "pineapple",
);
/****************************/
$res->arrayChunk($arrayChunk);
echo "<hr /> ";
/***************************/
$res->arrayCombine($arrayCombine1, $arrayCombine2);
echo "<hr /> ";
/***************************/
$res->arrayKeyExists($arrayKeyExists);
echo "<hr /> ";
/***************************/
$res->arrayKeys($arrayKeys);
echo "<hr /> ";
/***************************/
$res->arrayMerge($arrayMerge1, $arrayMerge2);
echo "<hr /> ";
/***************************/
$res->arrayMergeRec($arrayMerge1, $arrayMerge2);
echo "<hr /> ";
/***************************/
$res->arrayMultisort($arrayMultisort);
echo "<hr /> ";
/***************************/
$res->arrayPop($arrayChunk);
echo "<hr /> ";
/***************************/
$res->arrayPush($arrayChunk);
echo "<hr /> ";
/***************************/
$res->arrayRand($arrayChunk);
echo "<hr /> ";
/***************************/
$res->arrayReplace($arrayReplace1, $arrayReplace2);
echo "<hr /> ";
/***************************/
$res->arrayShift($arrayChunk);
echo "<hr /> ";
/***************************/
$res->arraySlice($arrayChunk);
echo "<hr /> ";
/***************************/
$res->arrayUnique($arrayChunk);
echo "<hr /> ";
/***************************/
$res->arrayUnshift($arrayChunk);
echo "<hr /> ";
/***************************/
$res->arrayValues($arrayChunk);
echo "<hr /> ";
/***************************/
$res->count($arrayChunk);
echo "<hr /> ";
/***************************/
$res->inArray($arrayChunk);
echo "<hr /> ";
/***************************/
$res->key($arrayKey);
echo "<hr /> ";
/***************************/
$res->sort($arrayChunk);
echo "<hr /> ";
/***************************/
