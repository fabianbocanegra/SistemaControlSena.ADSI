@extends('layouts.index')
@section('title')
    Crear Ficha
@endsection
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('fichas.guardar')}}" method="post">
            @csrf
            <select name="Jornada" id="Jornada" class="form-select my-3" aria-label="Default select example" >
                <option>Seleccione Jornada</option>
                <option value="Diurna">Diurna</option>
                <option value="Mixta">Mixta</option>
                <option value="Nocturna">Nocturna</option>
            </select>
            <select name="estado" id="estado" class="form-select my-3" aria-label="Default select example" >
                <option>Seleccione estado de la ficha</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
            <select name="programa" id="programa" class="form-select" aria-label="Default select example">
                <option value="">Seleccione Programa de Formacion</option>
                    @foreach($programa as $pformacion)
                        <option value="{{$pformacion->id}}">{{$pformacion->programa}}</option>
                    @endforeach
            </select>
            <hr>
            
            <button class="btn btn-success" type="submit">Agregar ficha</button>
            <a type="button" class="btn" id="color-font" href="{{route('fichas.listado')}}">Cancelar</a>
        </form>
    </div>
</div>
@endsection
