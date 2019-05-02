<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\autore;
use App\genero;
use App\editora;
use App\prateleira;
use App\cadastro_livro;
use App\livro;

class livroController extends Controller
{
    public function index()
    {
        $livroBusca = livro::all();
        $livro = cadastro_livro::all();
        return view ('livro.index', compact('livro', 'livroBusca'));
    }
    public function buscar(Request $request){
        
        $livroBusca = livro::where([
        ['nome_livros', 'LIKE', '%'.$request->buscaLivro.'%'],
        ['nome_autores', 'LIKE', '%'.$request->buscaAutor.'%'],
        ])->get();
        return view ('livro.index', ['livroBusca'=>$livroBusca]);
    }
    public function create()
    {
        $autor = autore::all();
        $genero = genero::all();
        $editora = editora::all();
        $prateleira = prateleira::all();
        $livro = cadastro_livro::all();
        return view ('livro.create', compact('livro', 'autor', 'genero', 'editora', 'prateleira'));

    }
    public function store(Request $request)
    {
        $livro = new cadastro_livro([
            'nome_livros' =>            $request->get('nome_livros'),
            'isbn_livros' =>            $request->get('isbn_livros'),
            'edicao_livros' =>          $request->get('edicao_livros'),
            'qtd_livros' =>             $request->get('qtd_livros'),
            'fk_livros_autor' =>        $request->get('fk_livros_autor'),
            'fk_livros_editora' =>      $request->get('fk_livros_editora'),
            'fk_livros_genero' =>       $request->get('fk_livros_genero'),
            'fk_livros_prateleira'=>    $request->get('fk_livros_prateleira'),
        ]);
        $livro -> save();
        return redirect('/livro/create');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $autor = autore::all();
        $genero = genero::all();
        $editora = editora::all();
        $prateleira = prateleira::all();
        $livro = cadastro_livro::find($id);
        $livroBusca = livro::find($id);
        return view('livro.edit', compact('livro', 'livroBusca', 'prateleira', 'autor', 'genero', 'editora'));
    }
    public function update(Request $request, $id)
    {
        $livro = cadastro_livro::find($id);

        $livro->nome_livros = $request->get('nome_livros');
        $livro->isbn_livros = $request->get('isbn_livros');
        $livro->edicao_livros = $request->get('edicao_livros');
        $livro->qtd_livros = $request->get('qtd_livros');
        $livro->fk_livros_autor = $request->get('fk_livros_autor');
        $livro->fk_livros_editora = $request->get('fk_livros_editora');
        $livro->fk_livros_genero = $request->get('fk_livros_genero');
        $livro->fk_livros_prateleira = $request->get('fk_livros_prateleira');
        $livro -> save();

        return redirect ('/livro');

    }
    public function destroy($id)
    {
        $livro = cadastro_livro::find($id);
        $livro -> delete();
        return redirect ('/livro');
    }
}
