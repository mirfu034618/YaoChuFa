13道程序作业题

1.arrayFunctionClass文件中的ArrayFunctionClass.php是封装成的一个php数组函数功能类

  （1）测试的php文件为arrayFunctionTest.php

  （2）调用例子：
                
                $res = new ArrayFunctionClass();

                $res->arrayChunk($arrayChunk);

2.arraySortClass文件中的ArraySortClass.php是实现二位数组排序的类

  （1）测试文件为arraySortTest.php

  （2）调用方法：
                
                $array_sort = new ArraySortClass();

                $person = $array_sort->arraySort($data, 'rank'); //设定需要根据数组中哪个键值进行排序

                var_dump($person);

3.testPackageClass文件中的TestClass.php是第1到10以及13题封装成的类

  （1）测试文件为testPackage.php

  （2）调用例子为：
                 
                 $test = new TestClass();

                 $persion = $test->numMax(5, 4, 8);

                 echo $persion;
