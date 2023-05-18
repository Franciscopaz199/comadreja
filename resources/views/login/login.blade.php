@extends('layouts.plantilla')
@section('css')
    <link href="{{ asset('css/loginstyles.css') }}" rel="stylesheet">
@section('contenido')

    <div class="contenido">
        <div class="lef-section">
            <div class="burbujas">
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
            </div>
            <div class="top">
                <h2> {{ config('app.name', 'ClassAssistan') }}</h2>
            </div>
            <div class="medio">
                <h4>No te has registrado?</h4>
                <p>
                    Registrate! no te tomará mas de cinco minutos, y podras disfrutar de todas las ventajas de nuestra plataforma
                </p>
                <a href="{{route('register')}}" class="btn " style="
                
                 border-color: #fff !important; color: #fff !important;
                ">Registrarse</a>
            </div>
            <div class="bottom">
                <p>desarrollado por IS-UNAH</p>
            </div>
        </div>
        <div class="right-section">
            @if ($errors->any())
                    
                    <div class="alert alert-danger">
                        <p>Sesion no Iniciada</p>
                        <ul>
                            @foreach ($errors->all() as $errors)
                                <li>{{$errors}}</li>
                            @endforeach
                        </ul>
                    
                    </div>
                    <script>
                        // hacer que el alert desaparezca despues de 5 segundos
                        setTimeout(function(){
                            document.querySelector('.alert').remove();
                        }, 4000);

                        
                    </script>
            @endif
            <div class="formulario-container">
                 <div class="title">
                    <b><h4>Iniciar Sesion</h4></b>
                    <p>Por favor inicia sesion con tu usuario y contraseña</p>
                 </div>
                <form action="{{route('iniciar')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email"><b>Correo</b></label>
                        <input type="email" name="email" id="email"  class=" input-enviar" placeholder="Correo electronico">
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Contraseña</b></label>
                        <input type="password" name="password" id="password" class="input-enviar" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-enviar btn-block" >Iniciar sesion</button>
                    </div>
                </form>
                <p>No te has registrado? <a href="{{route('register')}}">registrarse</a></p>
            </div>
        </div>
    </div>
    
@endsection