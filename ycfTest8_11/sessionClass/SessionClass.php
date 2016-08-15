<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/11
 * Time: 17:42
 */
namespace Ycf\Lssion\SessionClass;

header("Content-type:text/html;charset=utf-8");
class SessionClass
{
    public $sessionStar;

    public function __construct()
    {
        if (session_status() === 1) { //session_status启用新会话或者重用现有会话
            $this->sessionStar = false;
            return false;
        }
        return true;
    }
    public function init()
    {
        if ($this->sessionStar === false) {
            $this->sessionStar = true;
            return true;
        }
        return false;
    }
    public function sessionStart()
    {
        $ReturnSwitch = false;
        switch (session_status()) {
            case PHP_SESSION_DISABLED:
                $ReturnSwitch = "没有启用会话";
                break;
            case PHP_SESSION_NONE:
                $ReturnSwitch = "会话启用";
                break;
            case PHP_SESSION_ACTIVE:
                $ReturnSwitch = "会话启用并存在";
                break;
        }
        return $ReturnSwitch;

    }
    public function set($Key = false, $Value)
    {
        if ($this->sessionStar === true) {
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
