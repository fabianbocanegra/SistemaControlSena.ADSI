@extends('layouts.index')
@section('title')
    Crear aprendiz
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('aprendices.guardar')}}" method="post">
                @csrf
                <div class=" form-group row mb-3">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="apellidos" class="col-sm-2 col-form-label">apellidos</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="correo" class="col-sm-2 col-form-label">correo</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="correo">
                    </div>
                </div>
                <div class=" form-group row mb-3">
                    <label for="fechadeNacimiento" class="col-sm-2 col-form-label">fechadeNacimiento</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="fechadeNacimiento" name="fechadeNacimiento" placeholder="fechadeNacimiento">
                    </div>
                </div>
                <select name="tipoDoc" id="tipoDoc" class="form-select my-3"
                        aria-label="selecionar tipo de documento">
                    <option>Seleccione tipo de documento</option>
                    <option value="TI">TI</option>
                    <option value="CC">CC</option>
                    <option value="CE">CE</option>
                    <option value="PS">PS</option>
                </select>
                <div class=" form-group row mb-3">
                    <label for="documento" class="col-sm-2 col-form-label">documento</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="documento" name="documento" placeholder="documento">
                    </div>
                </div>
                <select name="sexo" id="sexo" class="form-select my-3" aria-label="selecionar genero">
                    <option>Seleccione el genero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="No-Binario">No-Binario</option>
                </select>
                <select name="idFicha" id="idFicha" class="form-select" aria-label="select">
                    <option value="">Seleccione la Ficha</option>
                    @foreach($ficha as $fichas)
                        @foreach($programa as $pformacion)
                            @if($fichas->id == $pformacion->id)
                                <option value="{{$fichas->idFicha}}"> {{$fichas->idFicha}}
                                    | {{$pformacion->programa}} | {{$fichas->estado}}
                                    | {{$fichas->jornada}}</option>
                            @endif
                        @endforeach
                    @endforeach
                </select>
                <hr>
                <button type="submit" class="btn btn-success">Agregar Aprendiz</button>
                <a type="button" class="btn btn-danger" href="{{route('aprendices.listado')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
