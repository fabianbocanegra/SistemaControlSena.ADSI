@extends('layouts.index')
@section('title')
    Crear programa
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('programas.guardar')}}" method="post">
                @csrf
                <div class=" form-group row mb-3">
                    <label for="programa" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="programa" name="programa" placeholder="programa">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="sigla" class="col-sm-2 col-form-label">sigla</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control uppercase " id="sigla" name="sigla" placeholder="Siglas">
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Crear Programa</button>
                <a type="button" class="btn btn-danger" href="{{route('programas.listado')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
