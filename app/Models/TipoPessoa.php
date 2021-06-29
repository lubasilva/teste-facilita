<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPessoa extends Model
{
    use HasFactory;
    protected $fillable = ['tipo'];
    protected $dates = ['create_at', 'updated_at'];
    protected $table = 'tipo_pessoas';
    protected $primaryKey = 'ìd';

    public function pessoa() {
        $this->belongsTo(Pessoa::class, 'id');
    }
}
