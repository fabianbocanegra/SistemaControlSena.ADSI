@extends('layouts.index')
@section('title')
    Instructor
@endsection
@section('content')
    <div class="container">
        <div class="row">
                <div class="btn-group d-md-block">
                    <hr>
                    <a href="{{route('instructores.crear')}}" class="btn btn-success">Registrar instructor</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" >
                            <thead>
                            <tr class="table-success">
                                <th>Foto</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Documento</th>
                                <th>Estado</th>
                                <th>Ficha</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instructor as $instructores)
                                <tr>
                                    <td>{{$instructores->Foto}}</td>
                                    <td>{{$instructores->Nombres}}</td>
                                    <td>{{$instructores->Apellidos}}</td>
                                    <td>{{$instructores->Documento}}</td>
                                    <td>{{$instructores->Estado}}</td>
                                    @foreach($ficha as $fichas)
                                        @if($instructores->idFicha == $fichas->idFicha)
                                            <td>{{$fichas->idFicha}}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                        <a href="{{route('instructores.editar',$instructores->id)}}">
                                            <i class="far fa-edit"></i>
                                        </a>
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
