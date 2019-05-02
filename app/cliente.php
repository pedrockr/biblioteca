<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'nome_clientes',
        'endereco_clientes',
        'celular_clientes',
        'cpf_clientes',
        'telefone_clientes',
        'email_clientes',
    ];
}
