<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    protected $fillable = ['id_pessoa', 'id_livro', 'devolvido',];
    protected $dates = ['create_at', 'updated_at'];
    protected $table = 'emprestimos';
    protected $primaryKey = 'ìd';

    public function livro() {
        return $this->hasMany(Livro::class, 'id', 'id_livro');
    }

    public function pessoa() {
        return $this->hasMany(Pessoa::class, 'id', 'id_pessoa');
    }
}
