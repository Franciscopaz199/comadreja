@extends('layouts.plantilla')
@section('css')
    <link href="{{ asset('css/indexStyles.css') }}" rel="stylesheet">
@endsection
@section('contenido')
    <div class="contenido">
        <div>
            <h1>Welcome</h1>
            <p><a href="{{ route('login') }}">Start</a></p>
        </div>
    </div>
@endsection