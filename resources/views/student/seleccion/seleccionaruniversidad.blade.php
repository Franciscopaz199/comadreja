@extends('student.seleccion.plantilla')
@section('content')
        <div class="right-section">
            <div class="titulo">
                <div class="title">
                   <b><h4>Hola {{ Auth::user()->name }}   </h4></b>
                    <p>Para poder terminar tu registro por favor selecciona <br>la universidad en la que estudias</p>
                </div>
           </div>
            <div class="container-select-uni">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <form class="card-wrapper swiper-wrapper" method="POST" action="{{route('selectuniv')}}" id="formulario">   
                    @csrf
                            @foreach ($universidades as $uni)
                                <input type="radio" value="{{$uni->id}}" id="{{$uni->id}}" class="radioseleccion" name="unive" required>
                                <label class="card swiper-slide" for="{{$uni->id}}">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="{{ asset( $uni->logo )  }}" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="name">{{$uni->shortname}}</h2>
                                        <p class="description">{{$uni->name}}</p>
                                        <p class="description">{{$uni->address}}</p>
                                    </div>
                                </label>
                            
                            @endforeach
                    
                            </form>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="btn-container">
                <button class="btn boton-atras" onclick="window.location.href='{{route('selectuni')}}'">Atras</button>
                <button class="btn btn-primary boton-enviar" type="submit" form="formulario">Continuar</button>
            </div>
          </div>
@endsection
