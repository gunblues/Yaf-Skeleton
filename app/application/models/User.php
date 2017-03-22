<?php

class UserModel
{
    public function __construct() {
       session_start();
    }

    public function cleanData() {
        if ($this->isLoggedIn()) {
            session_destroy();
        }
    }

    public function isLoggedIn() { 
        return $this->getUserData() !== false;
    }

    public function getUserData() {
        if(isset($_SESSION['user']['sig'])
            && isset($_SESSION['user']['sn'])
            && isset($_SESSION['user']['sid'])
            && md5($_SERVER['HTTP_USER_AGENT'].$_SESSION['user']['sid']) == $_SESSION['user']['sig']
        ){
            return $_SESSION['user'];
        }

        return false;
    }

    public function addUser($sn, $sid) { //{{{
        if (!isset($_SESSION['initialed'])) {
            session_regenerate_id();
            $_SESSION['initialed'] = true;
        }

        $_SESSION['user'] = array(
            "sn" => $sn,
            "sid" => $sid,
            "sig" => md5($_SERVER['HTTP_USER_AGENT'].$sid),
        );

    } //}}}

}

// vim: expandtab softtabstop=4 tabstop=4 shiftwidth=4 ts=4 sw=4
