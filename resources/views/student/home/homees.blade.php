@extends('layouts.homees')
@section('css')
    <link rel="stylesheet" href={{ asset('css/style-hh.css') }}>
    @livewireStyles
    <link rel="stylesheet" href="{{asset('css/styles-home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
    
    
@endsection
@section('content')
    <div class="info-user">
        <div class="informacion-usuario">
                 
                <div class="div">
                        <img src="{{asset('storage/imagenes/perfil.jpg')}}" alt="">
                        <div class="info">
                            <h1>{{Auth::user()->name}}</h1>
                            <p>{{Auth::user()->student->carrer->name}}</p>
                            <P>{{Auth::user()->student->universidad->shortname}}</P>
                        </div>
                         <!--
                        <div class="puntos">
                            <a href="">
                                <div class="punto"></div>
                                <div class="punto"></div>
                                <div class="punto"></div>
                             </a>
                        </div>
                        -->
                </div>
        </div>
        <div class="estadisticas">
            <p>Estadisticas</p>
            <div class="container-estadisticas">
                <div class="contenedor-barra">
                    <h6>Clases: {{Auth::user()->student->clases->count()}}/{{Auth::user()->student->carrer->puente->count()}}</h6>
                        <div class="barra">
                            <div class="barra-porcentaje" style="width: {{(Auth::user()->student->clases->count() / Auth::user()->student->carrer->puente->count())*100}}%">
                            </div>
                        </div>
                </div>
                <div class="contenedor-barra">
                    <h6>UV: {{Auth::user()->student->clases->sum('UV')}}/{{$totalUVcarrera}}</h6>
                        <div class="barra">
                            <div class="barra-porcentaje" style="width: {{(Auth::user()->student->clases->sum('UV')/$totalUVcarrera)*100}}%">
                            </div>
                        </div>
                </div>  
            </div> 
            <br>
            
            <center><a href="{{route('estadisticas')}}" class="">ver mas...</a></center>
            <div class="articulo-censo">
                <h4>Artículo 211.</h4>
                <hr>
                <p>"El estudiante, en forma obligatoria, dará a conocer a la institución sus necesidades de horarios de asignaturas o experiencias educativas.
                    Será responsabilidad de los jefes de departamento en asamblea docente y previa consulta con los coordinadores de carrera
                <br><center><a href="">ver mas...</a></center>
            </div>
        </div>  
    </div>
    <div class="muestra-informacion-principal">
            <div class="contenido-aplicacion">
                
                <div class="conta">
                    <div class="main-header" style="display: flex; flex-direction:column; align-items: flex-start;">
                       <h2>Siguiente Periodo</h2>      
                    </div>
                    <div class="main-header">
                        <p>Esto es lo que tienes para el siguiente periodo</p>
                    </div>
                    
                </div>
                <div class="content-header-intro">
                <div class="" style="display: flex; overflow-x: auto; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                        <p class="informa">clases:{{$cantidadclases}} </p>
                        <p class="informa" style="margin-left: 10px;">UV:{{$UV}} </p>
                </div>
                </div>
                <hr>
            </div>
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
                                                    
                                                        <form action="{{route('clase2')}}" method="GET" >
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
       
        <div class="contenido-aplicacion">
            <h2>Necesitas Ayuda?</h2>
            <p>No sabes que clases sacar el proximo periodo selecciona la cantidad de clases
                o tambien genera un horario automatico <a href="{{route('crearplan')}}">Ir al plan</a>

            </p>
        </div>
        @livewire('selectcant' )


<!--
        <div class="articulo-censo">
            <center><h4>Artículo 211.</h4></center>
            <p>"El estudiante, en forma obligatoria, dará a conocer a la institución sus necesidades de horarios de asignaturas o experiencias educativas.
                Será responsabilidad de los jefes de departamento en asamblea docente y previa consulta con los coordinadores de carrera
            <a href="">ver mas...</a></p>
        </div>
    -->

        <x-footer/>
    </div>
@endsection
@section('js')
@livewireScripts
<script src="{{ asset('js/swiper-bundle.min.js') }}" ></script>
<script src="{{ asset('js/script.js') }}"></script>
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
            slidesPerView: 2,
        },
    },
  });
</script>  
@endsection