<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desafio1 extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'altura', 'crescimentoAno', 'ano'];
    protected $dates = ['create_at', 'updated_at'];
    protected $table = 'desafio1s';
    protected $primaryKey = 'ìd';
}
