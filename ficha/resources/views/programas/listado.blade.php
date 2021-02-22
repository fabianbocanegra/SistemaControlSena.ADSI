@extends('layouts.index')
@section('title')
    Programas de formación
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="btn-group d-md-block">
                <hr>
                <a href="{{route('programas.crear')}}" type="button" class="btn btn-success">Nuevo Programa de Formacion</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-success">
                                <th>Codigo</th>
                                <th>Programa de formación</th>
                                <th>Sigla</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($programa as $programas)
                        <tr>
                            <td>{{$programas->id}}</td>
                            <td>{{$programas->programa}}</td>
                            <td class="uppercase">{{$programas->sigla}}</td>
                            <td>
                                <a href="{{route('programas.editar',$programas->id)}}">editar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-3">
                        {{$programa->links()}}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
