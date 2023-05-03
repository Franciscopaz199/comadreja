@extends('layouts.homeLayout')
@section('css') 
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-select-uni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-editclases.css') }}">
@section('contenido')
@section('content')
    <div class="contenido p-3">
        <div class="container-fluid">
           <div class="row ">
            <h3>Actualizar clases Aprobadas:</h3>
            <p class=".bg-light">Por favor solo selecciona clases que realmente has pasado</p>
            <hr>
             
            </div>    
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <form class="card-wrapper swiper-wrapper" action="{{route('checkclase')}}" method="POST"  id="formularioclases">   
                    @csrf
                        @foreach ($carrera->puente as $uni)
                        <input type="checkbox"   value="{{$uni->clase->id}}" id="{{$uni->clase->id}}" class="radioseleccion" name ="clase[]" 
                        @if ($clases->contains($uni->clase->id))
                            checked
                        @endif
                        >
                               <label class="card swiper-slide" for="{{$uni->clase->id}}">
                                   <div class="image-content">
                                       <span class="overlay"></span>
                                       <div class="card-image">
                                           <img src="{{ asset( $uni->clase->logo )  }}" alt="" class="card-img">
                                       </div>
                                   </div>
                                   <div class="card-content">
                                       <h2 class="name">{{$uni->clase->name}}</h2>
                                       <p class="description">{{$uni->clase->codigo}}</p>
                                       <p class="description">depto: {{$uni->clase->departa->name}}</p>
                                   </div>
                               </label>
                    @endforeach
                </form>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="row mt-4 ">
            <div class="btn-container d-flex justify-content-center">
                <button class="btn btn-primary px-5" type="submit" form="formularioclases">Actualizar</button>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{ asset('js/swiper-bundle.min.js') }}" ></script>
<script>
    var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
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
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
</script>     
@endsection

