<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/10
 * Time: 12:56
 */
class MessageClass
{
    public function message($name, $cont)
    {
        $writ = fopen("test.txt", "a");
        $date = date("Y-m-d h:i:s");
        $str  = $date . "\t" . $name . "\t" . $cont . "\r\n";
        fwrite($writ, $str, strlen($str));
        fclose($writ);
        header("Location:../message.php");
    }
}
$test      = new MessageClass();
$data_name = $_POST['username'];
$data_cont = $_POST['usertext'];
$test->message($data_name, $data_cont);
