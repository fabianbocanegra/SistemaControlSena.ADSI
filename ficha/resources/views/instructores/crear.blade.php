@extends('layouts.index')
@section('title')
    Crear instructor
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('instructores.guardar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="file" id="foto" name="foto" accept="image/*" >
                </div>
                <div class=" form-group row mb-3">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="documento" class="col-sm-2 col-form-label">Documento</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="documento" name="documento" placeholder="Documento">
                    </div>
                </div>
                <select name="estado" id="estado" class="form-select my-3" aria-label="Default select example" >
                    <option>Seleccione estado del instructor</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                <select name="idFicha" id="idFicha" class="form-select" aria-label="select" required>
                    <option value="">Seleccione la Ficha</option>
                        @foreach($ficha as $fichas)
                            @foreach($programa as $pformacion)
                                @if($fichas->id == $pformacion->id)
                                    <option value="{{$fichas->id}}">{{$fichas->id}} | {{$pformacion->programa}}</option>
                                @endif
                            @endforeach
                        @endforeach
                </select>
                <hr>
                <button type="submit" class="btn btn-success">Agregar instructor</button>
                <a type="button" class="btn btn-danger" href="{{route('instructores.listado')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
