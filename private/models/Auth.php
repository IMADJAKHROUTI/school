<?php

class Auth {

    public static function isAuthenticated($row) {
        $_SESSION['USER'] = $row;
    }

    public static function logout() {
        if(isset($_SESSION['USER'])){
            unset($_SESSION['USER']);
        }
    }

    public static function logged(){
        if(isset($_SESSION['USER'])){
            return true;
        }
        return false;
    }

    public static function __callStatic($methodName, $arguments)
    {
        $prop = strtolower(str_replace("get","",$methodName));
        if(isset($_SESSION['USER']->$prop)){
            return $_SESSION['USER']->$prop;
        }
        return "Unknow";
    }
}