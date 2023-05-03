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
                   <div class="form-group">
                       <label for="email">Correo</label>
                       <input type="email" name="email" id="email"  class="form-control" placeholder="ejemplo: fjpazf@unah.hn" required>
                   </div>
                   <div class="form-group">
                        <label for="email">Nombre de Usuario</label>
                        <input type="text" name="name" id="email"  class="form-control" placeholder="ejemplo: Francisco Paz" required>
                    </div>
                    <div class="form-group">
                        <label for="cuenta">Numero de Cuenta</label>
                        <input type="text" name="cuenta" id="cuenta"  class="form-control" placeholder="ejemplo: 20212300157" required>
                    </div>
                   <div class="form-group">
                       <label for="password">Contraseña</label>
                       <input type="password" name="password" id="password" class="form-control" placeholder="ejemplo: **********" required>
                   </div>
                   <div class="form-group">
                       <button type="submit" class="btn btn-enviar btn-block" style="width: 100% !important;  ">Iniciar sesion</button>
                   </div>
               </form>
               <p>Ya te has registrado? <a href="{{route('login')}}">iniciar sesion</a></p>
           </div>
        </div>
    </div>
@endsection