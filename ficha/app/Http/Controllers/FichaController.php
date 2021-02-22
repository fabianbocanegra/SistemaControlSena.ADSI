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
        $inner = programa::join('fichas', 'programas.id', '=', 'fichas.programa')->select('*')->get();
        $programa = programa::select()
            ->where('programa', 'LIKE', '%' . $Buscar . '%')
            ->get();
        $fichas = Ficha::select()
            ->where('jornada', 'LIKE', '%' . $Buscar . '%')
            ->get();
        return view('fichas.listado', compact('inner', 'Buscar', 'programa','fichas'));
    }
    public function listadoinactivo() {
        $fichas = Ficha::all()->where('estado', '==', 'Inactivo');
        $programa = programa::all();
        return view('fichas.listado', compact('fichas', 'programa'));
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
