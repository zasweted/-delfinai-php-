<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($duok, $kuku = 'dramblys')
    {
        $mas = ['Asilas', 'Karvius', 'Bulius', 'Kalakutas'];
        return view('kitkas.fun',[
            'kuku' => $kuku,
            'mas' => $mas
        ]);
    }
}
