<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;

class configController extends Controller
{
    public function index()
    {
        $configUpdate = setting::all();
        return view ('admin.home_customizar', compact('configUpdate'));
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
        $configUpdate = setting::find($id);
        return view('admin.home_customizar', compact('configUpdate'));
    }
    public function update(Request $request, $id)
    {
      $configUpdate = setting::find($id);
      $configUpdate->tituloPgInicial =      $request->get('tituloPgInicial');
      $configUpdate->subtituloPgInicial =   $request->get('subtituloPgInicial');
      //$configUpdate->corHero =              $request->get('corHero');
      $configUpdate->imgHero =              $request->get('imgHero');
      $configUpdate->NavBrand =             $request->get('NavBrand');
      $configUpdate->ativaBlog =             $request->get('ativaBlog');
      $configUpdate->ativaBusca =             $request->get('ativaBusca');
      $configUpdate->CorCaracter =             $request->get('CorCaracter');
      $configUpdate->corBusca =             $request->get('corBusca');

        $configUpdate->save();
        return redirect()->route('home_customizar')->with('success','atualizado');
    }
    public function destroy($id)
    {
        //
    }
}
