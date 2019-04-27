<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class usuarioController extends Controller
{
    public function index()
    {
        $usuario = User::all();
        return view ('usuario.index', compact('usuario'));
    }
    public function create()
    {
        return view ('usuario.create');
    }
    public function store(Request $request)
    {
        $usuario = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request['password']),
        ]);

        $usuario -> save();
        return redirect('/usuario');
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
        $usuario  = User::find($id);
        $usuario->delete();
        return redirect('/usuario');
    }
}
