<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\instructor;
use App\Models\programa;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function listado() {
        $instructor = instructor::all();
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        return view('instructores.listado',compact('instructor','ficha'));
    }
    public function registrar() {
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        $programa=programa::all();
        return view('instructores.crear',compact('ficha','programa'));
    }
    public function guardar(Request $request) {

        $instructor=instructor::create($request->all());
        return redirect()->route('instructores.listado');
    }
    public function editar($id){
        $instructor=instructor::find($id);
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        $programa=programa::all();
        return view('instructores.editar',compact('instructor','ficha','programa'));
    }
    public function actualizar (Request $request,$id){
        $instructor=instructor::find($id)->update($request->all());
        return redirect()->route('instructores.listado');
    }
}
