<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/9
 * Time: 11:31
 */
class TestClass
{
    /**
     * 作业1、运行程序，求$b的值
     */
    public function exercises()
    {
        $empty = '';
        $null  = null;
        $bool  = false;
        $array = array();
        $a     = 1;
        $x     = &$a;
        $b     = $a++;
        echo "作业(1)$b<br />";
    }

    /**
     * 作业2、用最少的代码写一个求三值中最大值的函数
     * 原理：先将a与b进行比较，如果a>b，则将a与c在进行比较，否则b与c比较，输出最终结果
     */
    public function numMax($a, $b, $c)
    {
        echo "作业(2)<br />";
        return $a > $b ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);
    }

    /**
     * 作业3、写出以下程序的输出结果并写出原因
     * 结果：4
     * 原因：b为201,c为40，b>c符合，则输出a为4
     */
    public function value()
    {
        $b = 201;
        $c = 40;
        $a = $b > $c ? 4 : 5;
        echo "作业(3)$a<br />";
    }

    /**
     * 作业4、写出以下程序的输出结果并写出原因
     * 结果：4
     * 原因：给int赋值为2，在将赋值传给timesTwo方法中进行运算
     */
    public function timesTwo($int)
    {
        $int = $int * 2;
        echo "作业(4)$int<br />";
    }

    /**
     * 作业5、写出以下程序的输出结果并写出原因
     * 结果：以下三个程序的结果都是相等
     * 原因：在php中，null、false、空字符串都是以0为值进行存储，
     *      如果程序输出中写成===（全等于）的话，则输出不相等
     */
    public function compare()
    {
        $str1 = null;
        $str2 = false;
        echo "作业(5)<br />";
        echo $str1 == $str2 ? "相等<br />" : "不相等<br />";

        $str3 = '';
        $str4 = 0;
        echo $str3 == $str4 ? "相等<br />" : "不相等<br />";

        $str5 = 0;
        $str6 = '0';
        echo $str5 == $str6 ? "相等<br />" : "不相等<br />";
    }

    /**
     * 作业6、练习下面例子并附上解释，描述isset()和empty()函数的区别和使用场景
     * 1、empty()函数是指如果 var 是非空或非零的值，则返回 FALSE。
     *   其中""、0、"0"、NULL、FALSE、array()、var $var以及没有任何属性的对象都将被认为是空的，
     *   即如果 var 为空，则返回 TRUE。
     * 2、isset()函数是检查变量是否设置，并且不是NULL，只能用于变量，
     * 3、区别：在empty中0会判定为空，而isset则判定不为空
     */
    public function emptyTest()
    {
        $a1 = null;
        $a2 = false;
        $a3 = 0;
        $a4 = '';
        $a5 = '0';
        $a6 = 'null';
        $a7 = array();
        $a8 = array(array());

        echo "作业(6)<br />";
        echo empty($a1) ? 'true<br />' : 'false<br />';
        echo empty($a2) ? 'true<br />' : 'false<br />';
        echo empty($a3) ? 'true<br />' : 'false<br />';
        echo empty($a4) ? 'true<br />' : 'false<br />';
        echo empty($a5) ? 'true<br />' : 'false<br />';
        echo empty($a6) ? 'true<br />' : 'false<br />';
        echo empty($a7) ? 'true<br />' : 'false<br />';
        echo empty($a8) ? 'true<br />' : 'false<br />';
    }

    /**
     * 作业7、写出以下程序的输出结果并写出原因
     * 结果：5  0
     * 原因：定义的变量$count = 5并没有调入函数，所以直接输出5，而在函数中定义了
     *      一个静态变量并赋值为0并直接返回值，所以get_count()获取到的值都为0.
     */
    public function get_count()
    {
        static $count = 0;
        return $count;
    }

    /**
     * 作业8、不使用第三个变量交换两个变量的值
     * 使用list()给一组变量进行赋值，值从array数组中获取
     */
    public function exchange()
    {
        $a = 2;
        $b = 3;
        echo "作业(8)<br />";
        echo $a . "<br />";
        echo $b . "<br />";
        echo "两个变量交换后的结果：<br />";
        list($a, $b) = array($b, $a);
        echo $a . "<br />";
        echo $b . "<br />";
    }

    /**
     * 作业9、将$arr=['zhangsan', 'lisi', 'wangwu']
     *       中的元素用','分隔并合成字符串
     * 方法：使用implode()函数--将一个一维数组的值转化为字符串
     *      其参数有两个implode（分割符,要合并的数组）
     */
    public function mergeString()
    {
        $arr        = ['zhangsan', 'lisi', 'wangwu'];
        $array_char = implode(",", $arr);
        echo "作业(9)<br />";
        echo $array_char;
    }

    /**
     * 作业10、写一段程序，实现$arrOne转换为$arrTwo
     * 主要利用foreach实现
     */
    public function arraySort($arrDate) //定义arraySort方法用来处理数组

    {
        foreach ($arrDate as $arrValue) { //使用foreach循环将原数组$arrDate中的元素存于$arrValue
            $test[$arrValue['fid']][] = array( //以$arrValue中的'fid'作为索引输出指定的数组元素
                'tid'  => $arrValue['tid'],
                'name' => $arrValue['name'],
            );
        }
        return array_values($test); //使用array_values()函数返回数组，返回的数组将使用数值键从0开始递增

    }

    /**
     * 作业13、99乘法表
     */
    public function multiplicationTable()
    {
        for ($i = 1; $i <= 9; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $d = $i * $j;
                echo $i . "*" . $j . "=" . $d . " ";
            }
            echo "<br />";
        }
    }

}
