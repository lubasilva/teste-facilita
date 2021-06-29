<?php

namespace App\Http\Controllers;

use App\Models\Desafio1;
use Illuminate\Http\Request;

class Desafio1Controller extends Controller
{
    public function index(Request $request) {
        $this->criarUsuarios();
        $results = Desafio1::all();
        $chico = Desafio1::where('nome', 'like', '%Chico%')->first();

        if($chico) {
            $juca = Desafio1::where('nome', 'like', '%Juca%')->first();
            if($juca) {
                $processoCrescimento = $this->calcularTempo($chico, $juca);
                return view('desafio1', compact('results', 'processoCrescimento'));
            }            
        }
        return  view('desafio1', compact('results'));
    }

    private function criarUsuarios() {
        Desafio1::updateOrCreate(
            ['nome' => 'Chico','altura' => 1.50],
            ['crescimentoAno' => 0.02, 'ano' => 2021
        ]);

        Desafio1::updateOrCreate(
            ['nome' => 'Juca','altura' => 1.10],
            ['crescimentoAno' => 0.03, 'ano' => 2021
        ]);
    }

    private function calcularTempo($chico, $juca) : array { 
        $alturaChico = $chico->altura;
        $alturaJuca = $juca->altura;
        $countAno = 0;

        if ($chico->altura > $juca->altura ) {
            while($alturaChico > $alturaJuca) {
                $alturaChico += 0.02;
                $alturaJuca += 0.03;
                $countAno ++;
            }
            $processoCrescimento = [
                'qtdAno' => $countAno, 
                'alturaJuca' => $alturaJuca,
                'alturaChico' => $alturaChico
            ];
        } else {
            while($alturaJuca > $alturaChico) {
                $alturaChico += 0.02;
                $alturaJuca += 0.03;
                $countAno ++;
                
            }

            $processoCrescimento = [
                'qtdAno' => $countAno, 
                'alturaJuca' => $alturaJuca,
                'alturaChico' => $alturaChico
            ];
        }

        return $processoCrescimento;
    }

}
