<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/9
 * Time: 15:33
 */
include "stringClass\StringClass.php";
header("Content-type:text/html;charset=utf-8");

/*************创建对象*****************/
$test = new StringClass();
/*************变量的赋值****************/
$str  = "1112223334445";
$str2 = "www.yaochufa.com";
$str3 = "my_leader";
$str4 = "make_by_name";
$mail = "liming@yaochufa.com";
$str5 = "There in hainan";
$str6 = "孙杨200赢得个人第三枚奥运金牌";
/****************输出******************/
$arr    = $test->division($str);
$newstr = number_format($arr); //调用number_format以千单位分隔数字
echo "作业1<br />";
echo $newstr;
echo "<hr />";

echo "作业2<br />";
echo $test->demo($str2);
echo "<hr />";

echo "作业3<br />";
echo $test->stringCapital($str3);
echo "<br />";
echo $test->stringCapital($str4);
echo "<hr />";

echo "作业4<br />";
echo $test->emailDomain($mail);
echo "<hr />";

echo "作业5<br />";
echo $test->filpString($str5);
echo "<hr />";

echo "作业6<br />";
echo $test->substr($str6);
