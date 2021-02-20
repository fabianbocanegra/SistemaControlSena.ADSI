@extends('layouts.index')
@section('title')
    Fichas
@endsection
@section('content')
    <div class="container">
            <div class="mx-5 px-5">
                <div class="btn-group flex-column w-100 offset-lg-4 col-lg-4 px-5">
                    <h4 class="mx-4">Filtrado de fichas</h4>
                    <div class="btn-group">
                        <div>
                            <div>
                                {{-- <a href="{{route('ficha.activa')}}" class="btn my-3 btn-outline-success">Fichas Activas</a> --}}
                                {{-- <a href="{{route('ficha.inactiva')}}" class="btn btn-outline-danger my-3">Fichas Inactivas</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-sm-4 col-sm-4">
                <form class="form-inline" action="{{route('fichas.listado')}}" method="get">
                    <div class="form-control my-3">
                        <input name="Buscar" id="Buscar" value="{{$Buscar}}" class="form-control" type="text"placeholder="Buscar">
                        <button class="btn btn-success w-100" type="submit">Buscar</button>
                    </div>               
                </form>
            </div>
        </div>
        <div class="row">
                <div class="btn-group d-md-block">
                    <div class="btn-group">
                        <a href="{{route('fichas.crear')}}" class="btn btn-success mx-3 my-3">Registro Ficha</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr class="table-success">
                                <th>Ficha</th>
                                <th>Jornada</th>
                                <th>Estado</th>
                                <th>Programa de formación</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                    @foreach($fichas as $ficha)
                                        <tr>
                                            <td>{{$ficha->id}}</td>
                                            <td>{{$ficha->jornada}}</td>
                                            <td>{{$ficha->estado}}</td>
                                            @if($Buscar != '')
                                                <td>{{$ficha->programa}}</td>     
                                            @else
                                                @foreach($programa as $program)
                                                    @if($ficha->programa == $program->id)
                                                        <td>{{$program->programa}}</td>
                                                    @endif
                                                @endforeach                                       
                                            @endif
                                            <td>
                                                @csrf
                                                <a href="{{route('fichas.editar',$ficha->id)}}">
                                                    editar
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
