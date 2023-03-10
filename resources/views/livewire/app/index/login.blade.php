@extends('layouts.plantilla')
@section('css')
    <link href="{{ asset('css/loginstyles.css') }}" rel="stylesheet">
@section('contenido')
    <div class="contenido">
        <div class="lef-section">
            <div class="top">
                <h2 >Class Assitan</h2>
            </div>
            <div class="medio">
                <h4>Recordatorio</h4>
                <p>Gracias por usar esta aplicacion estamos facinados de que esta herramienta le sea 
                    de utilidad, trabajamos muy  duro para
                    asegurarnos de que usted tenga la mejor experiencia posible.
                    Por favor, si tiene alguna pregunta o sugerencia, no dude en contactarnos.
                </p>
                <p>Atentamente: el equipo de desarrollado de IS-CURLP</p>
            </div>
            <div class="bottom">
                <p>desarrollado por IS-UNAH</p>
            </div>
        </div>
        <div class="right-section">
            <div class="formulario-container">
                 <div class="title">
                    <b><h4>Iniciar Sesion</h4></b>
                    <p>Por favor inicia sesion con tu usuario y contrasena</p>
                 </div>
                <form action="{{route('iniciar')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email"  class="form-control" placeholder="Correo electronico o numero de cuenta">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-enviar btn-block" style="width: 100% !important;  ">Iniciar sesion</button>
                    </div>
                </form>
                <p>No te has registrado? <a href="{{route('register')}}">registrarse</a></p>
            </div>
        </div>
    </div>
@endsection