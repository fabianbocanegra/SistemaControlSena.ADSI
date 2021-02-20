@extends('layouts.index')
@section('title')
    Fichas
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('fichas.actualizar',$ficha->id)}}" method="post">
                
                @csrf
                @method('PUT')

                <select name="idPformacion" id="idPformacion" class="form-select" aria-label="Default select example">

                    @foreach($programa as $pformacion)
                        @if($ficha->id == $pformacion->id)
                        <option value="{{$pformacion->id}}">{{$pformacion->programa}}</option>
                        @endif
                    @endforeach

                    @foreach($programa as $pformacion)
                        <option value="{{$pformacion->id}}">{{$pformacion->programa}}</option>
                    @endforeach

                </select>

                <select name="jornada" id="jornada" class="form-select my-3" aria-label="Default select example" >
                    <option value="{{$ficha->jornada}}">{{$ficha->jornada}}</option>
                    <option value="Diurna">Diurna</option>
                    <option value="Mixta">Mixta</option>
                    <option value="Nocturna">Nocturna</option>
                </select>

                <select name="estado" id="estado" class="form-select my-3" aria-label="Default select example" >
                    <option value="{{$ficha->estado}}">{{$ficha->estado}}</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>


                <hr>
                <button class="btn btn-success" type="submit">Actualizar ficha</button>
                <a type="button" class="btn" id="color-font" href="{{route('fichas.listado')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
