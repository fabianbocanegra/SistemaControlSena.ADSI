@extends('layouts.index')
@section('title')
    Editar programa
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('programas.actualizar',$programa->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class=" form-group row mb-3">
                    <label for="programa" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="programa" name="programa" value="{{$programa->programa}}" placeholder="programa">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="sigla" class="col-sm-2 col-form-label">SIGLA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sigla" name="sigla" value="{{$programa->sigla}}" placeholder="SIGLA">
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a type="button" class="btn btn-danger" href="{{route('programas.listado')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection

