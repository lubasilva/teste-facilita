<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Desafio4Controller extends Controller
{
    public function index(Request $request) {

        
        return view('desafio4');
    }

    public function pega(Request $request) {

        $valores = $request->input('vetValores');
        $valores = explode(",", $valores);
        $aux = max($valores);
        
        $a = 0;
        $b = 1;
        $t = 0;
        $valoresAceitos = [];

        while ($b < $aux) {
            foreach($valores as $val) {
                    if($val == $b) {
                        $valoresAceitos[] = $val;
                    }
                    
                }
            $t = $a;
            $a = $b; 
            $b = $t+$b;
        }
        return view('components.fibbo', compact('valoresAceitos', 'valores'));

    }
}
