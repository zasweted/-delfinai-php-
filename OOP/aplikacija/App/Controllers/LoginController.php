<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class LoginController {

    public function login()
    {
        $title = 'Login';

        App::view('login', ['title' => $title]);
    }

    public function logout()
    {
         
    }

    public function doLogin()
    {
            $users = Json::connect('users')->showAll();
            
            foreach($users as $user){
            if($user['name'] == $_POST['name']){
                if($user['pass'] == md5($_POST['pass'])){
                    $_SESSION['login'] = 1;
                    $_SESSION['user'] = $user;
                    return App::redirect('animals');
                }
            }
        }
        return App::redirect('login');
    }

}