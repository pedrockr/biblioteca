<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prateleira;

class PrateleiraController extends Controller
{
    public function index()
    {
        $prateleira = prateleira::all();
        return view ('prateleira.index', compact('prateleira'));
    }
    public function buscar(Request $request){
        
        $prateleira = prateleira::where([
        ['identificador_prateleira', 'LIKE', '%'.$request->buscaPrateleira.'%'],
        ])->get();
        return view ('prateleira.index', ['prateleira'=>$prateleira]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $prateleira = new prateleira([
            'identificador_prateleira'=>$request->get('identificador_prateleira'),
            'descricao_prateleira'=>$request->get('descricao_prateleira'),
        ]);
        $prateleira -> save();
        return redirect('/prateleira');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $prateleira = prateleira::find($id);
        return view('prateleira.edit',compact('prateleira'));
    }
    public function update(Request $request, $id)
    {
        $prateleira = prateleira::find($id);
        $prateleira->identificador_prateleira = $request->get('identificador_prateleira');
        $prateleira->descricao_prateleira = $request->get('descricao_prateleira');
        $prateleira->save();
        return redirect ('/prateleira');
    }
    public function destroy($id)
    {
        $prateleira = prateleira::find($id);
        $prateleira->delete();
        return redirect('/prateleira');
    }
}
