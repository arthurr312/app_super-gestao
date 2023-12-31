<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        echo "A soma de $p1 + $p2 é = ".($p1 + $p2);
        //com array associativo
        //return view('site.teste', ['x' => $p1, 'y' => $p2]);
        //compact
        //return view('site.teste', compact('p1', 'p2'));
        //with -> primeiro parametro é usado no lado da view, o segundo no controller
        return view('site.teste')->with('p1', $p1)->with('p2', $p2);
    }
}
