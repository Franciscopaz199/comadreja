<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetacion</title>
    <link rel="stylesheet" href={{ asset('css/style-homees.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    @yield('css')
</head>
<body>  
    <div class="contenedor-app">
        <div class="headerpage">
            <h1>UNAH</h1>
        </div>
        <div class="contenido-app">
            <div class="menu">
                <ul>
                    <li>
                        <a href="#">
                            <i>
                                <ion-icon name="people-circle-outline"></ion-icon>
                            </i>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('estadisticas')}}">
                           <i
                            @if (Request::is('estadisticas'))
                                style="color: var(--secondary-color);"
                             @endif
                           >
                            <ion-icon name="stats-chart-outline"></ion-icon>
                           </i>
                            
                        </a>
                     </li>
                     <li class="inicio">
                        <a href="{{route('home')}}">
                            <i class="fa-solid fa-house"
                                @if (Request::is('homeestudiante'))
                                    style="color: var(--secondary-color);"
                                @endif
                        ></i>
                            
                        </a>
                     </li>
                     <li>
                        <a href="#">
                            <i class="fa-regular fa-lightbulb"></i>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@yield('js')
</html>