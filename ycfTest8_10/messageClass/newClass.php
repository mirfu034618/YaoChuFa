<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/15
 * Time: 11:42
 */
include "MessageClass.php";
$test = new Ycf\Lssion\MessageClass\MessageClass($_POST['username'], $_POST['usertext']);
$test->message($name, $count);
