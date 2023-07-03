<?php

namespace Lib;

class Route{

    private static $routes = [];

    public static function get($Uri , $CallBack){

        $Uri = trim($Uri,'/');
        self::$routes['GET'][$Uri] = $CallBack;

    }

    public static function post($Uri , $CallBack){

        $Uri = trim($Uri,'/');
        self::$routes['POST'][$Uri] = $CallBack;

    }

    public static function patch($Uri , $CallBack){

        $Uri = trim($Uri,'/');
        self::$routes['PATCH'][$Uri] = $CallBack;

    }

    public static function dispatch(){

        $Uri = $_SERVER['REQUEST_URI'];
        $Uri = trim($Uri,'/');

        $Method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes[$Method] as $route => $CallBack) {

            if(strpos($route, ':') !== false){
                $route = preg_replace('#:[a-zA-Z]+#', '([a-zA-Z]+)' ,$route);
            }

            if(preg_match("#^$route$#",$Uri, $matches)){
                $params = array_slice($matches,1);
                $CallBack(...$params);
                return;
            }

        }

        echo '404 Not Found';
        
    }

}


?>