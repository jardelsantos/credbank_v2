<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extrato extends Model
{
    use HasFactory;

    protected $fillable = [
        'lancamento',
        'categoria',
        'descricao',
        'tipo',
        'valor'
    ];
}
