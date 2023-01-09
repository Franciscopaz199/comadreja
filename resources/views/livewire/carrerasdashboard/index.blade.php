<link href="{{ asset('css/stylescarreras.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title
                        ">Carreras</h3>
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Facultad</th>
                                        <th>Status</th>
                                        <th>accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carreras as $carrera)
                                            <tr class="selectcar">
                                                <td>{{$carrera->name}}</td>
                                                <td>{{$carrera->facultade->name}}</td>
                                                <td>{{$carrera->status}}</td>
                                                <td>
                                                    <form action="{{ url('/carreras/panel') }} " method="GET">
                                                        @csrf
                                                        <input type="hidden" value="{{$carrera->id}}" name="id">
                                                        <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                                                    </form>
                                                </td>
                                            </tr> 
                                    @endforeach
                                </table>
                        </div> 
                    </div>
                </div>
            </div>
        </div>     
    </div>   
</div>
@endsection