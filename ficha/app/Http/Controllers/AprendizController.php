<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use App\Models\Ficha;
use App\Models\programa;
use Illuminate\Http\Request;

class AprendizController extends Controller
{
    public function listado() {
        $aprendiz = Aprendiz::all();
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        $programa=programa::all();
        return view('aprendiz.index',compact('aprendiz','ficha','programa'));
    }
    public function registrar() {
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        $programa = programa::all();
        return view('aprendiz.create',compact('ficha','programa'));
    }
    public function almacenar(Request $request ) {
        $aprendiz=Aprendiz::create($request->all());
        return redirect()->route('aprendiz.index');
    }
    public function editar($id){
        $aprendiz=Aprendiz::find($id);
        $programa=programa::all();
        $ficha = Ficha::all()->where('estado', '==', 'Activo');
        return view('aprendiz.edit',compact('aprendiz','programa','ficha'));
    }
    public function actualizar (Request $request,$id){
        $aprendiz=Aprendiz::find($id)->update($request->all());
        return redirect()->route('aprendiz.index');
    }
    public function borrar($id){
        $aprendiz=Aprendiz::find($id)->delete();
        return redirect()->route('aprendiz.index');
    }
}
