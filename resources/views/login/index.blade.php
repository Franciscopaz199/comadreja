@extends('layouts.plantilla')
@section('css')
    <link href="{{ asset('css/indexStyles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endsection
@section('contenido')
    <div class="contenido">
        <div>
            <h1>Welcome</h1>
            <p><a href="{{ route('login') }}">Start</a></p>
        </div>
    </div>
    <x-footer></x-footer>
@endsection