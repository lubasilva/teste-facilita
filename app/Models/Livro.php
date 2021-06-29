<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'autor', 'quantidade',];
    protected $dates = ['create_at', 'updated_at'];
    protected $table = 'livros';
    protected $primaryKey = 'ìd';

    public function livroEmprestado() {
        return $this->belongsTo(Emprestimo::class, 'id');
    }
}
