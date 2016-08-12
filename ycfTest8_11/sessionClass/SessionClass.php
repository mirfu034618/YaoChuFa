<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 17:42
 */

header("Content-type:text/html;charset=utf-8");
class SessionClass
{
    public $session_star;

    public function __construct()
    {
        if (session_status() === 1) { //session_status启用新会话或者重用现有会话
            $this->session_star = false;
            return false;
        }
        return true;
    }
    public function init()
    {
        if ($this->session_star === false) {
            $this->session_star = true;
            return true;
        }
        return false;
    }
    public function sessionStart()
    {
        $Return_Switch = false;
        switch (session_status()) {
            case PHP_SESSION_DISABLED:
                $Return_Switch = "没有启用会话";
                break;
            case PHP_SESSION_NONE:
                $Return_Switch = "会话启用";
                break;
            case PHP_SESSION_ACTIVE:
                $Return_Switch = "会话启用并存在";
                break;
        }
        return $Return_Switch;

    }
    public function set($Key = false, $Value)
    {
        if ($this->session_star === true) {
            $_SESSION[$Key] = $Value;
            return true;
        }
        return false;
    }
    public function get($Key) //get方法用来获取session值

    {
        if (isset($_SESSION[$Key])) {
            return $_SESSION[$Key];
        }
        return false;
    }
}
