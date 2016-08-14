<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/9
 * Time: 11:01
 */

/**
 * Class ArraySortClass
 * 该类用来给二维数组进行排序
 * 排序方式为上升排序
 */
class ArraySortClass
{
    public function arraySort($array, $key, $arg = SORT_ASC) //可以设置$arg的值，确定排序方式

    {
        if (is_array($array)) {
            foreach ($array as $value) { //利用foreach循环将$array数组中的元素存于$value中
                if (is_array($value)) {
                    $array_test[] = $value[$key]; //根据键值
                }
            }
        }
        array_multisort($array_test, $arg, $array); //引用array_multisort函数
        return $array;
    }
}
