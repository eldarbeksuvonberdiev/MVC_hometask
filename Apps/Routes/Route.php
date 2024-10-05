<?php

namespace App\Routes;


class Route
{
    public static $routes = [];
    public $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public static function get($url,$action)
    {
        self::$routes['get'][$url] = $action;
    } 

    public static function post($url,$action)
    {
        self::$routes['post'][$url] = $action;
    }

    public function action(){

        $path = $this->request->url();
        $method = $this->request->method();
        $action = self::$routes[$method][$path] ?? false;

        if(!$action){
            echo "404 saxifa topilmadi". $path;
        }

        if(is_array($action)){

            //call_user_func_array(new [$action[0],$action[1]],[]);
            $controller = new $action[0];
            $controller->{$action[1]}();
        }

    }
}

?>