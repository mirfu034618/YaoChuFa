<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 20:47
 */
include "sessionClass/SessionClass.php";
$Session = new Ycf\Lssion\SessionClass\SessionClass();
$Session->init();

/***********************/
$Session->set("mirfu", "myname"); //传名字与值

echo $Session->get("mirfu");
