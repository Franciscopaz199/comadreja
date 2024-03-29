<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'UNAH'}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/46c5c26f8c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href={{ asset('css/footer.css') }}>
    <link rel="stylesheet" href={{ asset('css/style-modern.css') }}>
    <link rel="stylesheet" href={{ asset('css/components.css') }}>
    <link rel="stylesheet" href={{ asset('css/style-homees.css') }}>
    <link rel="stylesheet" href={{ asset('css/globalstyles.css') }}>
    @yield('css')
    @vite(['resources/js/app.js'])
</head>
<body>  
    <div class="contenedor-app">
        <x-navbar></x-navbar>
        <div class="contenido-app">
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{route('companeros')}}">
                            <i class="fa-solid fa-users"
                                @if (Request::is('companeros'))
                                    style="color: var(--secondary-color);"
                                @endif
                            >
                            </i>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('estadisticas')}}">
                            <i class="fa-solid fa-chart-line"
                            @if (Request::is('estadisticas'))
                                style="color: var(--secondary-color);"
                             @endif
                           >
                           </i>
                            
                        </a>
                     </li>
                     <li class="inicio">
                        <a href="{{route('homees')}}">
                            <i class="fa-solid fa-house"
                                @if (Request::is('homeestudiante'))
                                    style="color: var(--secondary-color);"
                                @endif
                               
                        ></i>
                            
                        </a>
                     </li>
                     <li>
                        <a href="{{route('crearplan')}} ">
                            <i class="fa-solid fa-screwdriver-wrench"
                            @if (Request::is('crearplan'))
                                style="color: var(--secondary-color);"
                            @endif
                            
                            ></i>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('editclases')}}">
                            <i class="fa-solid fa-pencil"
                            @if (Request::is('editclases'))
                                style="color: var(--secondary-color);"
                            @endif
                            ></i>
                        </a>
                     </li>

                </ul>
            </div>
            <div class="contenido">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@yield('js')
</html>