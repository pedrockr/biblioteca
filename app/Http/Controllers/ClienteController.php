<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = cliente::all();
        return view('cliente.index', compact('cliente'));
    }
    public function buscar(Request $request){
        
        $cliente = cliente::where([
        ['nome_clientes', 'LIKE', '%'.$request->buscaCliente.'%'],
        ['email_clientes', 'LIKE', '%'.$request->buscaEmail.'%'],
        ])->get();
        return view ('cliente.index', compact('cliente'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $cliente = new cliente([
            'nome_clientes'         =>$request->get('nome_clientes'),
            'endereco_clientes'     =>$request->get('endereco_clientes'),
            'celular_clientes'      =>$request->get('celular_clientes'),
            'cpf_clientes'          =>$request->get('cpf_clientes'),
            'telefone_clientes'     =>$request->get('telefone_clientes'),
            'email_clientes'        =>$request->get('email_clientes'),
        ]);        
        $cliente -> save();
        return redirect('/cliente');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $cliente = cliente::find($id);
        return view('cliente.edit', compact('cliente'));
    }
    public function update(Request $request, $id)
    {
        $cliente = cliente::find($id);

        $cliente->nome_clientes = $request->get('nome_clientes');
        $cliente->endereco_clientes = $request->get('endereco_clientes');
        $cliente->celular_clientes = $request->get('celular_clientes');
        $cliente->cpf_clientes = $request->get('cpf_clientes');
        $cliente->telefone_clientes = $request->get('telefone_clientes');
        $cliente->email_clientes = $request->get('email_clientes');       

        $cliente->save();
        return redirect('/cliente');
    }
    public function destroy($id)
    {
        $cliente = cliente::find($id);
        $cliente -> delete();
        return redirect('/cliente');
    }
}
