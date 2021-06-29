<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        return view('index');
    }

    // public function desafio1() {
    //     return view('desafio1');
    // }

    public function desafio2() {
        return view('desafio2');
    }

    public function desafio3() {
        return view('desafio3');
    }

    public function desafio4() {
        return view('desafio4');
    }
}
