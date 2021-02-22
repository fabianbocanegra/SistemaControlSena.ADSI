<?php

namespace App\Http\Controllers;

use App\Models\programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    public function listado() {
        $programa = programa::paginate('5');
        return view('programas.listado',compact('programa'));
    }
    public function registrar() {
        return view('programas.crear');
    }
    public function guardar(Request $request ) {
        $programa =programa::create($request->all());
        return redirect()->route('programas.listado');
    }
    public function editar($id){
        $programa=programa::find($id);
        return view('programas.editar',compact('programa'));
    }
    public function actualizar(Request $request, $id){
        $programa=programa::find($id)->update($request->all());
        return redirect()->route('programas.listado');
    }
}
