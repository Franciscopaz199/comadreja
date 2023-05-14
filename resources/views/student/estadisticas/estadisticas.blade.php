@extends('layouts.homees')
@section('css') 
@section('content')
    <main class="main" style="margin-top: 10px !important;">
        <div class="responsive-wrapper">
            <div class="conta">
                <div class="main-header"> 
                    <h1>Estadisticas:</h1>
                </div>
                <p class=".bg-light">Estas son tus estadisticas en la carrera de {{$carrera->name}}</p>
                <hr>
            </div>
        </div>
        
        <x-footer></x-footer>
    </main>
@endsection

