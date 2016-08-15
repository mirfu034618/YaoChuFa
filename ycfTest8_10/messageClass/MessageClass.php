<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/10
 * Time: 12:56
 */

namespace Ycf\Lssion\MessageClass;

class MessageClass
{

    public $name;
    public $count;

    public function __construct($name, $count)
    {
        $this->name  = $name;
        $this->count = $count;
    }

    public function message()
    {
        $writ = fopen("test.txt", "a");
        $date = date("Y-m-d h:i:s");
        $str  = $date . "\t" . $this->name . "\t" . $this->count . "\r\n";
        fwrite($writ, $str, strlen($str));
        fclose($writ);
        header("Location:../message.php");
    }

}
