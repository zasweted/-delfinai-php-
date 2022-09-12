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

    public function showForm(Request $request)
    {
        // // $result = $request->session()->pull('result', 'TUSCIA');
        // $result = $request->session()->get('result', 'TUSCIA');

        return view('form');
    }

    public function doForm(Request $request)
    {
        $x = $request->x;
        $y = $request->y;

        $result = $x + $y;

        // $request->session()->put('result', $result);
        // $request->session()->flash('result', $result);
        return redirect()->route('form')->with('result', $result);
    }
}
