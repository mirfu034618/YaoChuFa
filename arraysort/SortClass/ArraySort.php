<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/5
 * Time: 11:21
 */
namespace Algorithm\Sort;

class ArraySort
{
    /*
     * 冒泡排序
     */
    public function bubbleSort(array $data)
    {
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            for ($j = 0; $j < $count - 1 - $i; $j++) {
                if ($data[$j] > $data[$j + 1]) {
                    $this->swap($data[$j], $data[$j + 1]);
                }
            }
        }

        return $data;
    }

    /*
     * 插入排序
     */
    public function insertSort(array $data)
    {
        $count = count($data);
        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = $i + 1; $j > 0; $j--) {
                if ($data[$j] > $data[$j - 1]) {
                    break;
                }
                $this->swap($data[$j - 1], $data[$j]);
            }
        }

        return $data;
    }

    /*
     * 快速排序
     */
    public function quickSort(array $data)
    {
        $count = count($data);
        if ($count <= 1) {
            return $data;
        }
        $mid  = $data[0];
        $left = $right = [];
        for ($i = 1; $i < $count; $i++) {
            ($data[$i] < $mid) ? $left[] = $data[$i] : $right[] = $data[$i];
        }
        $left  = $this->quickSort($left);
        $right = $this->quickSort($right);

        return array_merge($left, [$mid], $right);
    }

    /*
     * 选择排序
     */
    public function choiceSort(array $data)
    {
        $len = count($data);
        if ($len <= 1) {
            return $data;
        }

        for ($i = 0; $i < $len; $i++) {
            $min = $data[$i];
            $pos = $i;
            for ($j = $i + 1; $j < $len; $j++) {
                if ($min > $data[$j]) {
                    $min = $data[$j];
                    $pos = $j;
                }
            }
            if ($pos != $i) {
                $data[$pos] = $data[$i];
                $data[$i]   = $min;
            }
        }
        return $data;
    }

    /*
     * 希尔排序
     */
    public function shellSort(array $data)
    {

        if (!is_array($data)) {
            return false;
        }
        $len = count($data);
        $d   = $len; //随机增量，初始值为数组长度，以不断除2取值
        while ($d > 1) {
            $d = intval($d / 2);
            //分组间隔，2为n值，n值减少时，移动的趟数和数据增多
            $temp = null;
            $j    = 0;
            for ($i = $d; $i < $len; $i += $d) {
                if ($data[$i] < $data[$i - $d]) {
                    $temp = $data[$i];
                    $j    = $i - $d;
                    while (($j >= 0) && $temp < $data[$j]) {
                        $data[$j + $d] = $data[$j];
                        $j             = $j - $d;
                    }
                    $data[$j + $d] = $temp;
                }
            }
        }
        return $data;
    }

    /**
     * 交换两个变量
     */
    public function swap($var1, $var2)
    {
        $tmp  = $var1;
        $var1 = $var2;
        $var2 = $tmp;
    }
}
