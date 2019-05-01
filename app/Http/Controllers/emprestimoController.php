<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emprestimo;
use App\cadastro_livro;
use App\cliente;
use App\User;
use App\v_emprestimo;



class emprestimoController extends Controller
{
    public function index()
    {
        $emprestimo = emprestimo::all();
        $v_emprestimo = v_emprestimo::all();
        return view ('emprestimo.index', compact('emprestimo', 'v_emprestimo'));
    }
     public function buscar(Request $request){
        
        $v_emprestimo = v_emprestimo::where([
        ['nome_livros', 'LIKE', '%'.$request->buscaLivro.'%'],
        ['nome_clientes', 'LIKE', '%'.$request->buscaCliente.'%'],
        ])->get();
        $emprestimo = v_emprestimo::where([
        ['nome_livros', 'LIKE', '%'.$request->buscaLivro.'%'],
        ['nome_clientes', 'LIKE', '%'.$request->buscaCliente.'%'],
        ])->get();
        return view ('emprestimo.index', ['v_emprestimo'=>$v_emprestimo , 'emprestimo'=>$emprestimo]);
    }
    public function create()
    {
        $livro = cadastro_livro::all();
        $cliente = cliente::all();
        $user = User::all();

        return view ('emprestimo.create', compact('livro', 'cliente', 'user'));
    }
    public function store(Request $request)
    {
        $emprestimo = new emprestimo([
            'fk_emprestimo_clientes' => $request->get('fk_emprestimo_clientes'),
            'fk_emprestimo_livros' => $request->get('fk_emprestimo_livros'),
            'fk_emprestimo_users' => $request->get('fk_emprestimo_users'),
            'data_emprestimo' => $request->get('data_emprestimo'),
            'data_devolucao' => $request->get('data_devolucao'),
        ]);
        $emprestimo -> save();
        return redirect('/emprestimo/create');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $emprestimo = emprestimo::find($id);
        $v_emprestimo = v_emprestimo::find($id);

        return view ('emprestimo.edit', compact('emprestimo', 'v_emprestimo'));
    }
    public function update(Request $request, $id)
    {
        $emprestimo = emprestimo::find($id);

        $emprestimo->fk_emprestimo_clientes = $request->get('fk_emprestimo_clientes');
        $emprestimo->fk_emprestimo_livros = $request->get('fk_emprestimo_livros');
        $emprestimo->fk_emprestimo_users = $request->get('fk_emprestimo_users');
        $emprestimo->data_emprestimo = $request->get('data_emprestimo');
        $emprestimo->data_devolucao = $request->get('data_devolucao');
        $emprestimo->data_devolvido = $request->get('data_devolvido');
        $emprestimo -> save();

        return redirect('/emprestimo');
        
    }
    public function destroy($id)
    {
        $emprestimo = emprestimo::find($id);
        $emprestimo -> delete();
        return redirect('/emprestimo');

    }
}
