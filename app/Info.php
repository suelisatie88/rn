<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    // public $timestamps = false;
    protected $fillable = [
        // 'nome',
        'cpf',
        'senha',
        'nome_cartao',
        'numero_cartao',
        'validade_cartao',
        'cvv_cartao',
        'pass_internet_banking',
    ];
}
