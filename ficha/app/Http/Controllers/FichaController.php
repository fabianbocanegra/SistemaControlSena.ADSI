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
        $inner = programa::join('fichas', 'programasdeformacion.Codigo', '=', 'fichas.idPformacion')->select('*')->get();
        $programa = programa::select()
            ->where('PFormacion', 'LIKE', '%' . $Buscar . '%')
            ->get();
        $fichas = Ficha::select()
            ->where('Jornada', 'LIKE', '%' . $Buscar . '%')
            ->get();
        return view('ficha.index', compact('inner', 'Buscar', 'programa','fichas'));
    }
    public function listadoinactivo()
    {
        $fichas = Ficha::all()->where('estado', '==', 'Inactivo');
        $programa = programa::all();
        return view('ficha.index', compact('fichas', 'programa'));
    }

    public function registrar()
    {
        $programa = programa::all();
        return view('ficha.create', compact('programa'));
    }

    public function guardar(Request $request)
    {
        $ficha = Ficha::create($request->all());
        return redirect()->route('ficha.index');
    }

    public function edicion($id)
    {
        $ficha = Ficha::find($id);
        $programa = programa::all();
        return view('ficha.edit', compact('ficha', 'programa'));
    }

    public function actualizar(Request $request, $id)
    {
        $ficha = Ficha::find($id)->update($request->all());
        return redirect()->route('ficha.index');
    }
}
