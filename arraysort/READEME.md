PHP常用的5中排序算法
   1.快速排序->quickSort()
   2.冒泡排序->bubbleSort()
   3.插入排序->insertSort()
   4.选择排序->choiceSort()
   5.希尔排序->shellSort()

   排序算法类:ArraySort
   测试数组排序的功能:arraySortTest.php

   测试方法：
     1.$sort = new Algorithm\Sort\ArraySort();  //获取容器

     2.$arrSort = $sort->shellSort($arr); //

     3.var_dump($arrSort);//将获取到的结果输出