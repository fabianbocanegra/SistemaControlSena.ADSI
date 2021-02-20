<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Instructor;
use App\Models\programa;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function listado() {
        $instructor = Instructor::all();
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        return view('instructor.index',compact('instructor','ficha'));
    }
    public function registrar() {
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        $programa=programa::all();
        return view('instructor.create',compact('ficha','programa'));
    }
    public function guardar(Request $request ) {

        $instructor=Instructor::create($request->all());
        return redirect()->route('instructor.index');
    }
    public function editar($id){
        $instructor=Instructor::find($id);
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        $programa=programa::all();
        return view('instructor.edit',compact('instructor','ficha','programa'));
    }
    public function actualizar (Request $request,$id){
        $instructor=Instructor::find($id)->update($request->all());
        return redirect()->route('instructor.index');
    }
}
