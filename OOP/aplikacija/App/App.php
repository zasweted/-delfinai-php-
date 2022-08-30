<?php

namespace App;

use App\Controllers\HomeController as H;
use App\Controllers\AnimalController as A;


class App {

    public static function start()
    {
        self::router();
    }

    public static function router()
    {
        $url =  $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        array_shift($url);
        $method = $_SERVER['REQUEST_METHOD'];
        
        if($method == 'GET' && count($url) == 1 && $url[0] == ''){
            return((new H)->home());
        }
        if($method == 'GET' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'create'){
            return((new A)->create());
        }
    }

    public static function view(string $name, array $data=[])
    {
        extract($data);
        require DIR . 'resources/view/' . $name . '.php';
    }

}