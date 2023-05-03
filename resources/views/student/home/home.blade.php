@extends('layouts.homeLayout')
@section('css')
@livewireStyles
    <link rel="stylesheet" href="{{asset('css/styles-home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
@endsection
@section('content')

    <div class="contenido">

        <div class="info-user">
            <div class="datos-user">
                <small>Inicio de la aplicacion</small>
                <h1>Hola {{auth()->user()->name }}</h1>
                <small>Nada mejor que tener un plan para prepararte para las clases!</small>
            </div>
            <!--
            <div class="cuadro-info-container">
                <div class="cuadro-info">
                    <h4 class="alert-heading">Observacion</h4>
                    <p>Aunque haya la suficiente cantidad de alumnos para, aperturar esta clase, no implica que va a estar disponible, 
                        para asegurarte que va a estar disponible debes censarla.
                    </p>
                    <hr>
                    <p class="mb-0">no sabes lo que es el censo? <a href="">Saber mas...</a></p>
                  
                </div>
        
            </div>
        -->
        
        </div>
        
        <div class="contenido-user">

        <div class="contenido-app">
            <h2>Estas las clases que podes llevar</h2>
            <small>Selecciona una para ver mas informacion</small>
            
        <hr>
            <p>UV: {{$UV}} Clases: {{$clases->count()}}</p>

        <div class="contenedor-clases-info">
            <div class="clases-proximo-periodo">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper" id="formularioclases">   
                            @csrf
                                @foreach ($clases  as $uni)
                                       <div class="card swiper-slide" >
                                           <div class="image-content">
                                               <span class="overlay"></span>
                                           </div>
                                           <div class="card-content">
                                               <div class="nombre-clase">
                                                    <h1 class="name">{{$uni->clase->name}}</h1>
                                               </div>
                                               <p class="description">{{$uni->clase->codigo}}</p>
                                               
                                               <div class="container-info-uv">
                                                <p class="description">UV: {{$uni->clase->UV}}</p>
                                                
                                                    <form action="{{route('clase')}}" method="GET" >
                                                       @csrf
                                                       <input type="hidden" name="clase" value="{{$uni->id}}">
                                                       <input type="submit" value="Ver info" class="btn btn-ir" name="agregar" id="{{$uni->id}}">
                                                   </form>
                                               </div>
                                           </div>
                                        </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
                </div>
            </div>
        </div>
        <div class="contenido-app">
            <h3>Necesitas ayuda?</h3>
            <small>Selecciona la cantidad de clases que quieres sacar el proximo periodo y nuestro algoritmo se encargara de decidir por tu, de acuerdo a prioridad</small>
            <hr>
            
            @livewire('selectcant' )
        </div>
       <div class="contenido-app">
        <h4>Aqui hay mas..</h4>
        <hr>
        <p class="text-muted mb-0">
            Sabemos que tus estudios son tan importantes como para nosotros y decidir correctamente que clases 
            sacar es de suma importancia, tambien sabemos que no confias plenamente en un algoritmo, asi que 
            te mostramos la opcion de que tu mismo puedas elegir las clases que quieres sacar, para que asi estes seguro
            de que la opcion que elegiste es la correcta.
        </p>
			
		</div>
       </div>
    </div>
@endsection
@section('js')
@livewireScripts
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
      clickable: false,
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

