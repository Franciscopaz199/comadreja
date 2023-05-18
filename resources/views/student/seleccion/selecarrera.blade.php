@extends('student.seleccion.plantilla')

@section('content')
<div class="right-section">
    <div class="titulo">
        <div class="title">
         <h4>En que carrera estas inscrito?</h4>
         <p>Estas son algunas carreras de la universidad {{$universidad->shortname}}</p>
        </div>
   </div>
  
    <div class="container-select-uni">
     <div class="slide-container swiper">
        <div class="slide-content">
            <form class="card-wrapper swiper-wrapper" method="POST" action="{{route('selectcarrer')}}" id="formulario">   
             @csrf
                @foreach ($carreras as $uni)
                    <input type="radio" value="{{$uni->id}}" id="{{$uni->id}}" class="radioseleccion" name="carrera" required>
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
                            <p class="description">{{$uni->description}}</p>
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