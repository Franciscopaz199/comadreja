@extends('layouts.plantilla')
@section('css') 
    <link href="{{ asset('css/loginstyles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-select-uni.css') }}">
@section('contenido')
    <div class="contenido">
        <div class="lef-section">
            <div class="top">
                <h2 >Terminando tu Registro</h2>
            </div>
            <div class="medio">
                <h4>¿Sabias que?</h4>
                <p>La universidad nacional autonoma de Honduras fue fundada  el 
                    19 de septiembre de 1847 y es la institucion de educacion superior mas antigua de Honduras.
                </p>
            </div>
            <div class="bottom">
                <p>desarrollado por IS-UNAH</p>
            </div>
        </div>
        <div class="right-section">
            <div class="formulario-container">
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
                <button class="btn btn-primary boton-enviar" type="submit" form="formulario">Continuar</button>
            </div>
          </div>
    </div>

@endsection

@section('js')
<script src="{{ asset('js/swiper-bundle.min.js') }}" ></script>
<script>
    var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: false,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 1,
        },
        950: {
            slidesPerView: {{ ($universidades->count() > 3 )? 3 : $universidades->count();  }},
        },
    },
  });
</script>   
@endsection