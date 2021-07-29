<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function sumar($a, $b) {

        return '<h1>La suma es: ' . ($a + $b). '</h1>';
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function foro()
    {
        return view('foro');
    }
}
