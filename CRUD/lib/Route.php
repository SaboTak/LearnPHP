<?php

namespace Lib;

class Route{

    private static $routes = [];

    public static function get($Uri , $CallBack){
        self::$routes['GET'][$Uri] = $CallBack;
    }

    public static function post($Uri , $CallBack){
        self::$routes['POST'][$Uri] = $CallBack;
    }

    public static function patch($Uri , $CallBack){
        self::$routes['PATCH'][$Uri] = $CallBack;
    }

    public static function dispatch(){
        $uri = $_SERVER['REQUEST_URI'];
        
    }

}


?>