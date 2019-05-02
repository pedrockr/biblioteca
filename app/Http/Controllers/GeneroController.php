<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genero;

class GeneroController extends Controller
{
    public function index()
    {
        $genero = genero::all();
        return view ('genero.index', compact('genero'));
    }
    public function buscar(Request $request){
        
        $genero = genero::where([
        ['nome_generos', 'LIKE', '%'.$request->nome_generos.'%'],
        ])->get();
        return view ('genero.index', ['genero'=>$genero]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $genero = new genero([
            'nome_generos'=>$request->get('nome_generos'),
        ]);
        $genero -> save();
        return redirect('/genero');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $genero = genero::find($id);
        return view('genero.edit',compact('genero'));
    }
    public function update(Request $request, $id)
    {
        $genero = genero::find($id);
        $genero->nome_generos = $request->get('nome_generos');
        $genero->save();
        return redirect ('/genero');
    }
    public function destroy($id)
    {
        $genero = genero::find($id);
        $genero->delete();
        return redirect('/genero');
    }
}
