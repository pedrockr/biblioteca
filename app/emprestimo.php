<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emprestimo extends Model
{
    protected $fillable = [
    	'fk_emprestimo_clientes',
    	'fk_emprestimo_livros',
    	'fk_emprestimo_users',
    	'data_emprestimo',
    	'data_devolucao',
    	'data_devolvido'

    ];
}
