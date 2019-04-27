<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;

class configController extends Controller
{
    public function index()
    {
        $aparencia = setting::all();
        return view ('aparencia.index', compact('aparencia'));
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $aparencia = setting::find($id);
        return view('aparencia.edit', compact('aparencia'));
    }
    public function update(Request $request, $id)
    {
      $aparencia = setting::find($id);
      $aparencia->tituloPgInicial =      $request->get('tituloPgInicial');
      $aparencia->subtituloPgInicial =   $request->get('subtituloPgInicial');
      //$configUpdate->corHero =              $request->get('corHero');
      $aparencia->imgHero =              $request->get('imgHero');
      $aparencia->NavBrand =             $request->get('NavBrand');
      $aparencia->ativaBlog =             $request->get('ativaBlog');
      $aparencia->ativaBusca =             $request->get('ativaBusca');
      $aparencia->CorCaracter =             $request->get('CorCaracter');
      $aparencia->corBusca =             $request->get('corBusca');

        $aparencia->save();
        return redirect('/aparencia/1/edit');;
    }
    public function destroy($id)
    {
        //
    }
}
