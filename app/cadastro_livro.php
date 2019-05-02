<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastro_livro extends Model
{
    protected $fillable = [
        'nome_livros',
        'isbn_livros',
        'edicao_livros',
        'qtd_livros',
        'fk_livros_autor',
        'fk_livros_editora',
        'fk_livros_genero',
        'fk_livros_prateleira',

    ];

}
