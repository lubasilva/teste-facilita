<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\Pessoa;
use App\Models\TipoPessoa;
use Illuminate\Http\Request;

use DB;

class BibliotecaController extends Controller
{
    public function index() {
        $this->criarTipoPessoa();
        $this->criarPessoas();
        $this->criarLivros();
        $livros = Livro::all();
        $pessoas = Pessoa::all();

        return view('desafio2', compact('livros', 'pessoas'));
    }

    public function emprestar(Request $request) {
        $idPessoa = $request->input('idTipoPessoa');
        $idLivro = $request->input('idLivro');

        Emprestimo::create([
            'id_pessoa' => $idPessoa,
            'id_livro' => $idLivro,
            'devolvido' => 0
        ]);

        $livro = DB::table('livros')->find($idLivro);
        $pessoa = DB::table('pessoas')->find($idPessoa);

        
        return view('components.comprovante', compact('livro', 'pessoa'));
    }

    private function criarPessoas() {
        Pessoa::updateOrCreate(
            ['nome' => 'Chico','idade' => 59],
            ['id_tipo' => 1]
        );

        Pessoa::updateOrCreate(
            ['nome' => 'Juca','idade' => 89],
            ['id_tipo' => 1]
        );

        Pessoa::updateOrCreate(
            ['nome' => 'João','idade' => 17],
            ['id_tipo' => 2]
        );

        Pessoa::updateOrCreate(
            ['nome' => 'Mateus','idade' => 19],
            ['id_tipo' => 2]
        );

        Pessoa::updateOrCreate(
            ['nome' => 'Woshigton','idade' => 18],
            ['id_tipo' => 2]
        );

        Pessoa::updateOrCreate(
            ['nome' => 'Lourenço','idade' => 23],
            ['id_tipo' => 2]
        );
    }

    private function criarLivros() {
        Livro::updateOrCreate(
            ['nome' => '1984','autor' => 'George Orwell'],
            ['quantidade' => 2]
        );

        Livro::updateOrCreate(
            ['nome' => 'A Revolução dos Bixos','autor' => 'George Orwell'],
            ['quantidade' => 1]
        );

        Livro::updateOrCreate(
            ['nome' => 'O Senhor dos Anéis','autor' => 'J. R. R. Tolkien'],
            ['quantidade' => 3]
        );

        Livro::updateOrCreate(
            ['nome' => 'Cthulhu','autor' => 'Lovecraft'],
            ['quantidade' => 1]
        );

        Livro::updateOrCreate(
            ['nome' => 'O Iluminado','autor' => 'Stephen King'],
            ['quantidade' => 4]
        );
    }

    private function criarTipoPessoa() {
        TipoPessoa::updateOrCreate(
            ['tipo' => 'Professor'],
        );

        TipoPessoa::updateOrCreate(
            ['tipo' => 'Aluno'],
        );
    }
}
