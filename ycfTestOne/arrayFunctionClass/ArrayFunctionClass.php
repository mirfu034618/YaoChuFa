<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/9
 * Time: 10:05
 */
header("Content-type:text/html;charset=utf-8");

class ArrayFunctionClass
{
    /**
     * 1、arrayChunk()方法
     * 作用：调用array_chunk()将一个数组分割成多个
     */
    public function arrayChunk($array)
    {
        var_dump(array_chunk($array, 2));
    }

    /**
     * 2、array_combine()函数
     * 作用：创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
     */
    public function arrayCombine($array1, $array2)
    {
        $arrayCombine = array_combine($array1, $array2);

        var_dump($arrayCombine);
    }

    /**
     * 3、array_key_exists()函数
     * 作用：检查给定的键名或索引是否存在于数组中
     */
    public function arrayKeyExists($array)
    {
        if (array_key_exists('test', $array)) {
            echo "索引的数组中有该键名";
        } else {
            echo "无";
        }
    }

    /**
     * 4、array_keys()函数
     * 作用：返回数组中部分的或所有的键名
     */
    public function arrayKeys($array)
    {
        var_dump(array_keys($array));
    }

    /**
     * 5、array_merge()
     * 作用：合并一个或多个数组
     */
    public function arrayMerge($array1, $array2)
    {

        $array = array_merge($array1, $array2);
        var_dump($array);
    }

    /**
     * 5、array_merge_recursive()
     * 作用：递归地合并一个或多个数组
     */
    public function arrayMergeRec($array1, $array2)
    {
        $array = array_merge_recursive($array1, $array2);
        var_dump($array);
    }

    /**
     * 6、array_multisort()
     * 作用：进行数组的排序
     */
    public function arrayMultisort($array)
    {
        foreach ($array as $row) {
            $volume[] = $row['value']; //索引键名
        }
        array_multisort($volume, SORT_ASC, $array); //根据索引的键名进行上升排序
        var_dump($array);
    }

    /**
     * 7、array_pop()
     * 作用：将数组最后一个单元弹出（出栈）
     */
    public function arrayPop($array)
    {
        array_pop($array); //将最后的元素弹出
        var_dump($array);
    }

    /**
     * 8、array_push()
     * 作用：将一个或多个单元压入数组的末尾（入栈）
     */
    public function arrayPush($array)
    {
        array_push($array, 'qiao', 'mei'); //$array是指你索要操作的数组,而后面跟着的两个var是要压入数组的元素
        var_dump($array);
    }

    /**
     * 9、array_rand()
     * 作用：从数组中随机取出一个或多个单元
     */
    public function arrayRand($array)
    {
        $rand = array_rand($array, 3); //两个参数分别为：指定数组与要随机取出的单元数量
        echo $array[$rand[0]] . "\n"; //对应单元数量进行输出
        echo $array[$rand[1]] . "\n";
        echo $array[$rand[2]] . "\n";
    }

    /**
     * 10、array_replace()
     * 作用：使用传递的数组替换第一个数组的元素
     * 该函数是非递归的：它将第一个数组的值进行替换而不管第二个数组中是什么类型。
     */
    public function arrayReplace($array1, $array2)
    {
        $array = array_replace($array1, $array2);
        var_dump($array);
    }

    /**
     * 11、array_shift()
     * 作用：将数组中开头的元素移出数组
     */
    public function arrayShift($array)
    {
        array_shift($array);
        var_dump($array);
    }

    /**
     * 12、array_slice()
     * 作用：获取数组中的某一段
     */
    public function arraySlice($array)
    {
        $output = array_slice($array, 3, 2, true);
        /*$output = array_slice($array, -1, 2);
        $output = array_slice($array, 1, 2);*/
        var_dump($output);
    }

    /**
     * 13、array_unique()
     * 作用：去除数组中重复的值
     */
    public function arrayUnique($array)
    {
        $output = array_unique($array);
        var_dump($output);
    }

    /**
     * 14、array_unshift()
     * 作用：在数组开头插入一个或多个元素
     */
    public function arrayUnshift($array)
    {
        array_unshift($array, 'four');
        var_dump($array);
    }

    /**
     * 15、array_values()
     * 作用：将数组中的值全部返回
     */
    public function arrayValues($array)
    {
        array_values($array);
        var_dump($array);
    }

    /**
     * 16、count()
     * 作用：计算数组中的单元数目或对象中的属性个数，如果参数是null的话，则返回0
     */
    public function count($array)
    {
        $band = count($array);
        var_dump($band);
    }

    /**
     * 17、in_array()
     * 作用：检查数组中是否存在某个值
     */
    public function inArray($array)
    {
        if (in_array('two', $array)) {
            echo "yes";
        } else {
            echo "no";
        }
    }

    /**
     * 18、key()
     * 作用：从关联数组中取得键名
     */
    public function key($array)
    {
        while ($array_name = current($array)) {
            if ($array_name == 'test') {
                echo key($array) . '<br />';
            }
            next($array);
        }
    }

    /**
     * 19、sort()
     * 作用：对数组进行排序
     */
    public function sort($array)
    {
        sort($array);
        foreach ($array as $val) {
            var_dump($val);
        }
    }

}
