@extends('layouts.homelayout')
@section('content')
    <div class="container-fluid">
        <div class="container p-5">
            <h3>Listado de Estudiantes de la carrera: 
                {{auth()->user()->student->carrer->name}}</h3>
        
                
        <table class="table">
            <thead class="fila1">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Carrera</th>
    
              </tr>
            </thead>
            <tbody>


         @forelse(auth()->user()->student->carrer->students  as $user)
            <tr>
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
    </div>



@endsection