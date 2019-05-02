<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\editora;

class EditoraController extends Controller
{
    public function index()
    {
        $editora = editora::all();
        return view('editora.index', compact('editora'));
    }
    public function buscar(Request $request){
        
        $editora = editora::where([
        ['nome_editoras', 'LIKE', '%'.$request->buscaEditora.'%'],
        ])->get();
        return view ('editora.index', ['editora'=>$editora]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $editora = new editora([
            'nome_editoras' => $request->get('nome_editoras')
        ]);
        $editora->save();
        return redirect('/editora');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $editora = editora::find($id);
        return view('editora.edit',compact('editora'));
    }
    public function update(Request $request, $id)
    {
        $editora = editora::find($id);
        $editora->nome_editoras = $request->get('nome_editoras');
        $editora->save();
        return redirect ('/editora');
    }
    public function destroy($id)
    {
        $editora = editora::find($id);
        $editora->delete();
        return redirect('/editora');
    }
}
