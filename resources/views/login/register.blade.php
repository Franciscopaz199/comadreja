@extends('layouts.plantilla')
@section('css')
     <link href="{{ asset('css/loginstyles.css') }}" rel="stylesheet">
    <style>
        .contenido{
            display: flex;
            flex-direction: row-reverse
        }
    </style>
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
                <h4>Ya tienes una cuenta?</h4>
                <p>
                    Inicia sesion y podras acceder a todos los servicios que te ofrece Class Assitan
                </p>
                <a href="{{route('login')}}" class="btn " style="
                
                 border-color: #fff !important; color: #fff !important;
                ">Iniciar Sesion</a>
            </div>
            <div class="bottom">
                <p>desarrollado por IS-UNAH</p>
            </div>
        </div>
        <div class="right-section">
            <div class="formulario-container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p>No se ha completado tu registro</p>
                        <ul>
                            @foreach ($errors->all() as $errors)
                                <li>{{$errors}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="title">
                   <b><h4>Registarse </h4></b>
                   <p>Por favor escribe tus datos reales en esta seccion</p>
                </div>
                
               <form action="{{route('create')}}" method="POST">
                @csrf
                    <div style="display: flex;
                    
                    justify-content: space-between;
                    ">
                        <div class="form-group">
                            <label for="email"><b>Nombre de Usuario</b></label>
                            <input type="text" name="name" id="email"  class="input-enviar" placeholder="ejemplo: Francisco Paz" required>
                        </div>
                        <div class="form-group">
                            <label for="cuenta"><b>Numero de Cuenta</b></label>
                            <input type="text" name="cuenta" id="cuenta"  class="input-enviar" placeholder="ejemplo: 20212300157" required>
                        </div>
                    </div>

                   <div class="form-group">
                       <label for="email"><b>Correo</b></label>
                       <input type="email" name="email" id="email"  class="input-enviar" placeholder="ejemplo: fjpazf@unah.hn" required>
                   </div>
                   <div class="form-group">
                       <label for="password"><b>Contraseña</b></label>
                       <input type="password" name="password" id="password" class="input-enviar" placeholder="ejemplo: **********" required>
                   </div>
                   <div class="form-group">
                       <button type="submit" class="btn btn-enviar btn-block">Iniciar sesion</button>
                   </div>
               </form>
               <p>Ya te has registrado? <a href="{{route('login')}}">iniciar sesion</a></p>
           </div>
        </div>
    </div>
@endsection