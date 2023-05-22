@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p>texto plano</p>
            </div>
            <div class="card-body">
                <p>
                    {{$texto}}
                </p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <p>texto convertido</p>
            </div>
            <div class="card-body">
                <p>{{$nuevotexto}}</p>
            </div>

        </div>

        <div class="card mt-3">
            <div class="card-header">
                <p>Array texto</p>
            </div>
            <div class="card-body">
                <ul>
                    @foreach ($codigosclases as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        

    </div>
@endsection