@extends('layouts.index')
@section('title')
    Aprendices
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="btn-group d-md-block">
                <hr>
                <a href="{{route('aprendices.crear')}}" class="btn btn-success">Registrar aprendiz</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr class="table-success">
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Fecha de nacimiento</th>
                            <th>Documento</th>
                            <th>Genero</th>
                            <th>Ficha</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($aprendiz as $aprendices)
                            <tr>
                                <td>{{$aprendices->nombre}}</td>
                                <td>{{$aprendices->apellidos}}</td>
                                <td>{{$aprendices->correo}}</td>
                                <td>{{$aprendices->fechadeNacimiento}}</td>
                                <td>{{$aprendices->tipoDoc}} {{$aprendices->documento}}</td>
                                <td>{{$aprendices->sexo}}</td>
                                @if($aprendices->idFicha == "")
                                    <td>Sin asignar</td>
                                @endif
                                @foreach($ficha as $fichas)
                                    @if($fichas->estado == "Inactivo")
                                        <td>Sin asignar</td>
                                    @elseif($aprendices->idFicha == $fichas->idFicha)
                                        <td>{{$fichas->idFicha}}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <form action="{{route('aprendices.borrar',$aprendices->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('aprendices.editar',$aprendices->id)}}">
                                            Editar
                                        </a>
                                        <button class="btn btn-danger" type="submit">
                                            X Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
