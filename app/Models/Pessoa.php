<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome', 'idade', 'id_tipo',];
    protected $dates = ['create_at', 'updated_at'];
    protected $table = 'pessoas';
    protected $primaryKey = 'ìd';

    public function tipoPessoa() {
        return $this->hasOne(TipoPessoa::class, 'id', 'id_tipo');
    }

    public function emprestimos() {
        return $this->belongsTo(Emprestimo::class, 'id');
    }
}
