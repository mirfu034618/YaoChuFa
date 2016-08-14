<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/9
 * Time: 13:04
 */

header("Content-type:text/html;charset=utf-8");

include "testPackageClass\TestClass.php";

/***************************/
$test = new TestClass();
/***************************/
$test->exercises();
echo "<hr />";
/***************************/
$persion = $test->numMax(5, 4, 8);
echo $persion;
echo "<hr />";
/***************************/
$test->value();
echo "<hr />";
/***************************/
$test->timesTwo(2);
echo "<hr />";
/***************************/
$test->compare();
echo "<hr />";
/***************************/
$test->emptyTest();
echo "<hr />";
/***************************/
echo "作业(7)<br />";
$count = 5;
echo $count . "<br />";
echo $test->get_count();
echo "<hr />";
/***************************/
$test->exchange();
echo "<hr />";
/***************************/
$test->mergeString();
echo "<hr />";
/***************************/
$arrOne = array(
    0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
    1 => array('fid' => 1, 'tid' => 2, 'name' => 'zhangsan'),
    2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
    3 => array('fid' => 1, 'tid' => 7, 'name' => 'wangwu'),
    4 => array('fid' => 3, 'tid' => 9, 'name' => 'zhaoliu'),
);
$arrTwo = $test->arraySort($arrOne);
echo "作业(10)<br />";
var_dump($arrTwo);
echo "<hr />";
/***************************/
echo "作业(13)<br />";
$test->multiplicationTable();
echo "<hr />";
