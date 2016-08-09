<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/5
 * Time: 11:21
 */

class ArraySort
{
    /*
     * 冒泡排序
     *
     * 思路：
     * 1.将给出的数组进行相邻数比较
     * 2.比较相连两个元素,如果第一个比第二个大,交换位置
     * 3.n个数,需要观察n-1次
     * 4.每当两相邻的数比较后发现它们的排序与排序要求相反时，就将它们互换。
     */
    public function bubbleSort(array $data)
    {
        $count = count($data);

        //该循环是控制需要冒泡的轮数
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
     * 1.从第一个元素开始，可将其定为已排列好的排序
     * 2.取出下一个元素，在已经排序的元素序列中从后向前扫描
     * 3.如果该元素大于取出的新元素，则将该元素移到下一位置
     * 4.循环步骤3，直到找到已排序的元素小于或者等于新元素的位置
     * 5.将新元素插入到该位置后
     * 6.依次循环步骤，知道元素全部排列好
     *
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
     *
     * 1.将数组中某个元素作为初始值
     * 2.第二个值开始,与初始值比较,小的放在左边,大的放在右边
     * 3.递归,直到数组就剩一个值
     *
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
        $left  = $this->quickSort($left); //小于初始值放于左边
        $right = $this->quickSort($right);

        return array_merge($left, [$mid], $right);
    }

    /*
     * 选择排序
     *
     * 1.首先在尚未排序的序列中找到最小元素,存放于排序序列的最左边起始位置
     * 2.再依次从剩余的未排序元素中继续寻找最小元素,放到已排序序列的末尾
     * 3.以此类推,直到所有元素均排序完毕
     *
     */
    public function choiceSort(array $data)
    {
        $len = count($data);
        if ($len <= 1) {
            return $data;
        } //如果所得到的序列长度<=1位的话，则直接返回

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
     * 希尔排序中一个常数因子n，原数组被分成各个小组，每个小组由h个元素
     * 组成，很可能会有多余的元素。当然每次循环的时候，h也是递减的（h=h/n）。
     * 第一次循环就是从下标为h开始。希尔排序的一个思想就是，分成小组去排序。
     *
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
    public function swap(&$var1, &$var2)
    {
        $tmp  = $var1;
        $var1 = $var2;
        $var2 = $tmp;
    }
}
