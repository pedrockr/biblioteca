<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livro;

class pgBuscaController extends Controller
{
    public function index()
    {
        $busca = livro::all();
        return view('pgBusca', compact('busca'));
    }

        
    public function buscar(Request $request){
        
        $busca = livro::where([
        ['nome_livros', 'LIKE', '%'.$request->buscaNome.'%'],
        ['nome_autores', 'LIKE', '%'.$request->buscaAutor.'%'],
        ['nome_editoras', 'LIKE', '%'.$request->buscaEditora.'%']
        ])->get();
        return view ('pgBusca', ['busca'=>$busca, 'buscaNome'=>$request]);
        

        /*
        if(!($request->buscaNome == "")){
            $busca = livro::where('nome_livros', 'LIKE', '%'.$request->buscaNome.'%')->get();
            return view ('pgBusca', ['busca'=>$busca, 'buscaNome'=>$request]);
        }
        if(!($request->buscaAutor =="")){
            $busca = livro::where('nome_autores', 'LIKE', '%'.$request->buscaAutor.'%')->get();
            return view ('pgBusca', ['busca'=>$busca, 'buscaAutor'=>$request]);
        }
        
        //$busca = livro::where('nome_livros', 'LIKE', '%'.$request->buscaNome.'%')->get();
        //return view ('pgBusca', ['busca'=>$busca, 'buscaNome'=>$request]);
        */

    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
