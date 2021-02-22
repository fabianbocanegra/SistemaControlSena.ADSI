@extends('layouts.index')
@section('title')
    Editar instructor
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('instructores.actualizar',$instructor->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class=" form-group row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*" value="{{$instructor->foto}}" placeholder="foto">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$instructor->nombre}}" placeholder="nombre">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="apellido" class="col-sm-2 col-form-label">apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellido" name="apellido" value="{{$instructor->apellido}}" placeholder="apellido">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="documento" class="col-sm-2 col-form-label">documento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="documento" name="documento" value="{{$instructor->documento}}" placeholder="documento">
                    </div>
                </div>
                <select name="estado" id="estado" class="form-select my-3" aria-label="Default select example" >
                    <option value="{{$instructor->estado}}">{{$instructor->estado}}</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                <select name="idFicha" id="idFicha" class="form-select" aria-label="select" required>
                    @foreach($ficha as $fichas)
                        @foreach($programa as $programas)
                            @if($fichas->id == $programas->id & $instructor->idFicha == $fichas->id)
                                <option value="{{$fichas->id}}">{{$fichas->id}} | {{$programas->programa}}</option>
                            @endif
                        @endforeach
                    @endforeach

                    <option>Seleccione la Ficha</option>

                    @foreach($ficha as $fichas)
                        @foreach($programa as $programas)
                            @if($fichas->id == $programas->id)
                                <option value="{{$fichas->id}}">{{$fichas->id}} | {{$programas->programa}}</option>
                            @endif
                        @endforeach
                    @endforeach
                </select>
                <hr>
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a type="button" class="btn btn-danger" href="{{route('instructores.listado')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
