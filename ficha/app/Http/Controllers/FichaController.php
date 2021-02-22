<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\programa;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    public function listado(Request $request)
    {
        $Buscar = trim($request->get('Buscar'));
        $programa = programa::all();
        $fichas = programa::join('fichas','fichas.programa','=','programas.id')            
            ->where('programas.programa', 'LIKE', '%' . $Buscar . '%')
            ->get();
        return view('fichas.listado', compact('Buscar', 'programa','fichas'));
    }
    public function listadoactivo(Request $request) {
        $Buscar = trim($request->get('Buscar'));
        $fichas = Ficha::all()->where('estado', '==', 'Activo');
        $programa = programa::all();
        return view('fichas.listado', compact('fichas', 'programa','Buscar'));
    }
    public function listadoinactivo(Request $request) {
        $Buscar = trim($request->get('Buscar'));
        $fichas = Ficha::all()->where('estado', '==', 'Inactivo');
        $programa = programa::all();
        return view('fichas.listado', compact('fichas', 'programa','Buscar'));
    }
    public function registrar() {
        $programa = programa::all();
        return view('fichas.crear', compact('programa'));
    }
    public function guardar(Request $request)
    {
        $ficha = Ficha::create($request->all());
        return redirect()->route('fichas.listado');
    }
    public function edicion($id)
    {
        $ficha = Ficha::find($id);
        $programa = programa::all();
        return view('fichas.editar', compact('ficha', 'programa'));
    }
    public function actualizar(Request $request, $id)
    {
        $ficha = Ficha::find($id)->update($request->all());
        return redirect()->route('fichas.listado');
    }
}
