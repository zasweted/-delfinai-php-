<?php

namespace App\Services;

class Messages {

    public static function makeMsg($type, $text)
    {
        $_SESSION['msg'] = ['type' => $type, 'text' => $text];
    }

}