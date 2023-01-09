@extends('layouts.plantilla')
@section('css') 
    <link href="{{ asset('css/loginstyles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-select-uni.css') }}">
@section('contenido')
    <div class="contenido">
        <div class="lef-section" style="background-color: {{$carrera->color1}}">
            <div class="top">
                <h2 >Ya casi acabamos...</h2>
            </div>
            <div class="medio">
                <h4>¿Por que es necesario hacer esto?</h4>
                <p>necesitamos conocer tus datos antes de </p>
            </div>
            <div class="bottom">
                <p>desarrollado por IS-UNAH</p>
            </div>
        </div>
        
        <div class="right-section">
          
        <div class="formulario-container">
            <div class="title">
             <h4>Por favor</h4>
             <p>selecciona todas las clases que has pasado</p>
            </div>
        </div>
        <div class="container-select-uni" >
         <div class="slide-container swiper">
            <div class="slide-content">
                <form class="card-wrapper swiper-wrapper" action="{{route('checkclase')}}" method="POST" id="formularioclases">   
                    @csrf
                        @foreach ($carrera->clases  as $uni)
                        <input type="checkbox"   value="{{$uni->id}}" id="{{$uni->id}}" class="radioseleccion" name ="clase[]">
                               <label class="card swiper-slide" for="{{$uni->id}}">
                                   <div class="image-content">
                                       <span class="overlay"></span>
                                       <div class="card-image">
                                           <img src="{{ asset( $uni->logo )  }}" alt="" class="card-img">
                                       </div>
                                   </div>
                                   <div class="card-content">
                                       <h2 class="name">{{$uni->name}}</h2>
                                       <p class="description">{{$uni->codigo}}</p>
                                       <p class="description">depto: {{$uni->departa->name}}</p>
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
        <button class="btn btn-primary" type="submit" form="formularioclases">Continuar</button>
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
            slidesPerView: 3,
        },
    },
  });
</script>   
@endsection