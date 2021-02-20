<?php

namespace App\Http\Controllers;

use App\Models\programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    public function listado() {
        $programa = programa::all();
        return view('programa.index',compact('programa'));
    }
    public function registrar() {
        return view('programa.create');
    }
    public function guardar(Request $request ) {
        $programa =programa::create($request->all());
        return redirect()->route('programa.index');
    }
    public function editar($id){
        $programa=programa::find($id);
        return view('programa.edit',compact('programa'));
    }
    public function actualizar(Request $request, $id){
        $programa=programa::find($id)->update($request->all());
        return redirect()->route('programa.index');
    }
}
