<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\autore;

class AutorController extends Controller
{
    public function index()
    {
        $autor = autore::all();
        return view ('autor.index', compact('autor'));
    }
    public function buscar(Request $request){
        
        $autor = autore::where([
        ['nome_autores', 'LIKE', '%'.$request->buscaAutor.'%'],
        ])->get();
        return view ('autor.index', ['autor'=>$autor]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $autor = new autore([
            'nome_autores'=>$request->get('nome_autores'),
        ]);
        $autor -> save();
        return redirect('/autor');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $autor = autore::find($id);
        return view('autor.edit',compact('autor'));
    }
    public function update(Request $request, $id)
    {
        $autor = autore::find($id);
        $autor->nome_autores = $request->get('nome_autores');
        $autor->save();
        return redirect ('/autor');
    }
    public function destroy($id)
    {
        $autor = autore::find($id);
        $autor->delete();
        return redirect('/autor');
    }
}
