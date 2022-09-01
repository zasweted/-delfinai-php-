<?php

namespace App;

use App\Controllers\HomeController as H;
use App\Controllers\AnimalController as A;
use App\Controllers\LoginController as L;
use App\Controllers\ApiController as Api;
use App\Middlewares\Auth;


class App {

    public static function start()
    {
        session_start();
        self::router();
    }

    public static function router()
    {
        $url =  $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        array_shift($url);
        $method = $_SERVER['REQUEST_METHOD'];

        if(!Auth::authorize($url)){
            return self::redirect('login');
        }
        
        if($method == 'GET' && count($url) == 1 && $url[0] == ''){
            return((new H)->home());
        }
        if($method == 'GET' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'create'){
            return((new A)->create());
        }
        if($method == 'POST' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'store'){
            return((new A)->store());
        }
        if($method == 'GET' && count($url) == 1 && $url[0] == 'animals'){
            return((new A)->list());
        }
        if($method == 'GET' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'edit'){
            return((new A)->edit($url[2]));
        }
        if($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'update'){
            return((new A)->update($url[2]));
        }
        if($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'delete'){
            return((new A)->delete($url[2]));
        }
        if($method == 'GET' && count($url) == 1 && $url[0] == 'login'){
            if(Auth::isLoged()){
                return self::redirect('');
            }
            return((new L)->login());
        }
        if($method == 'POST' && count($url) == 1 && $url[0] == 'login'){
            return((new L)->doLogin());
        }
        if($method == 'POST' && count($url) == 1 && $url[0] == 'logout'){
            return((new L)->logout());
        }
        if($method == 'GET' && count($url) == 2 && $url[0] == 'api' && $url[1] == 'go'){
            return((new Api)->show());
        }
        if($method == 'POST' && count($url) == 2 && $url[0] == 'api' && $url[1] == 'go'){
            return((new Api)->doApi());
        }
    }

    public static function view(string $name, array $data=[])
    {
        extract($data);
        require DIR . 'resources/view/' . $name . '.php';
    }

    public static function redirect(string $where)
    {
        header('Location: '. URL . $where);
    }

}