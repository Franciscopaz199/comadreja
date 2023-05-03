@extends('layouts.homelayout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/stylos-info-clase.css')}}">
@endsection
@section('content')
    <div class="contenedor-infor">
        <div class="titulos-clase">
            <div class="textos">
                <h5>Periodo {{$periodo}} anio {{$anio }}</h5>
                <h1>{{$clase->clase->name}}</h1>
                <h2>{{$clase->clase->codigo}}</h2>
                <h3 class="mb-0">UV: {{$clase->clase->UV}} Participantes: {{$clase->clase->students->count()}}</h3>
            </div>
        </div>
        <div class="participantes-clase">
            <div class="alumnos-container">
                <h4>Personas que tambien pueden Llevar la clase</h4>
                <small>Estas son las personas que tambien pueden llevar la clase el proximo periodo</small>
                <hr>
                <table class="table">
                    <thead class="fila1">
                      <tr>
                        <th scope="col">N#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Carrera</th>
                      </tr>
                    </thead>
                    <tbody>
                 @forelse($clase->clase->students as $user)
                    <tr>
                        <td scope="row">
                            {{$loop->iteration}}
                        </td>
                        <td scope="row">
                            {{$user->usuario->name}}
                        </td>
                        <td>
                            {{$user->carrer->name}}
                        </td>
                    </tr>
                 @empty
                    <p>No hay personas que puedan llevar esta clase</p>
                @endforelse
                    </tbody>
                </table>
            </div>
            <div class="observaciones">
                <div class="informacion-adicional" role="alert">
                    <h4 class="alert-heading">Observacion</h4>
                    <p>Aunque haya la suficiente cantidad de alumnos para, aperturar esta clase, no implica que va a estar disponible, 
                        para asegurarte que va a estar disponible debes censarla.
                    </p>
                    <hr>
                    <p class="mb-0">no sabes lo que es el censo? <a href="">Saber mas...</a></p>
                  </div>
            </div>
        </div>
    </div>
@endsection