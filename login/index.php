<?php
session_start();
define('INSTAL', '/-delfinai-php-/login/');
define('DIR', __DIR__. '/');
define('URL', 'http://localhost/-delfinai-php-/login/');





router();



function router(){

    $url =  $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTAL, '', $url);
    $url = explode('/', $url);
    $method = $_SERVER['REQUEST_METHOD'];

    if($method == 'GET' && count($url) == 1 && $url[0] == 'login'){
        view('login');
    }else if($method == 'POST' && count($url) == 1 && $url[0] == 'login'){
        doLogin();
    }else if($method == 'GET' && count($url) == 1 && $url[0] == ''){
        doLogin('home');
    }else if($method == 'GET' && count($url) == 1 && $url[0] == 'client'){
        if(!isLogged()){
            redirect('login');
        }
        view('client');
    }
       echo '404';   // require DIR . 'inc/' . 'home.php';
};

function view($tmp){

    require DIR . 'inc/' . $tmp . '.php';

};
function isLogged(){

    return (isset($_SESSION['login']) && $_SESSION['login'] == 1);

};
function redirect($where){

    header('Location: ' . URL . $where);
    die;

};

function doLogin(){

    $users = file_get_contents(DIR . 'inc/users.json');
    $users = json_decode($users, 1);
    foreach($users as $user){
        if($user['name'] == $_POST['name']){
            if($user['pass'] == md5($_POST['psw'])){
                $_SESSION['login'] = 1;
                $_SESSION['user'] = $user;
                redirect('client');
            }
        }
    }
    redirect('login');
};