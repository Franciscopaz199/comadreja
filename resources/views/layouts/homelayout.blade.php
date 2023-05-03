<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href=" {{ asset('css/stylos.css') }}">
    <link rel="stylesheet" href="">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    @yield('css')

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"

</head>
<body id="body">
    

    <div class="containera">
        <div class="menu__side menu__side_move" id="menu_side">

            <div class="name__page">
              <i class="far fa-sticky-note" title="Blog"></i>
                <h4>Class</h4>
            </div>
    
            <div class="options__menu">	
    
                <a href="{{route('home')}}" class="
                    @if (request()->routeIs('home'))
                        selected
                    @endif
                ">
                    <div class="option">
                        <i class="fas fa-home" title="Inicio"></i>
                        <h4>Inicio</h4>
                    </div>
                </a>
                
                <a href="{{route('planestudios')}}" class="
                @if (request()->routeIs('planestudios'))
                    selected
                @endif
                " 
                >
                    <div class="option">
                        <i class="far fa-file" title="Portafolio"></i>
                        <h4>Plan de estudios</h4>
                    </div>
                </a>

                <a href="{{route('estadisticas')}}" class="
                @if (request()->routeIs('estadisticas'))
                    selected
                @endif
                " 
                >
                    <div class="option">
                        <i class="far fa-id-badge" title="Contacto"></i>
                        
                        <h4>Estadisticas</h4>
                    </div>
                </a>
                
                
                <a href="{{route('crearplan')}}" class="
                @if (request()->routeIs('crearplan'))
                    selected
                @endif
                " 
                >
                    <div class="option">
                        <i class="fas fa-video" title="Cursos"></i>
                        <h4>Crear</h4>
                    </div>
                </a>
    
                <a href="{{route('companeros')}}" class="
                @if (request()->routeIs('companeros'))
                    selected
                @endif
                " 
                >
                    <div class="option">
                        <i class="far fa-id-badge" title="Contacto"></i>
                        
                        <h4>Companeros</h4>
                    </div>
                </a>
    
                <a href="{{route('util')}}" class="
                @if (request()->routeIs('util'))
                    selected
                @endif
                " 
                >
                    <div class="option">
                        <i class="far fa-sticky-note" title="Blog"></i>
                        <h4>Esto es util</h4>
                    </div>
                </a>
    
                <a href="{{route('acercade')}}" class="
                @if (request()->routeIs('acercade'))
                    selected
                @endif
                " 
                >
                    <div class="option">
                        <i class="far fa-address-card" title="Nosotros"></i>
                        <h4>Acerca de</h4>
                    </div>
                </a>
    
            </div>
    
        </div>

        <div class="right-section">
            <header>
                <div class="icon__menu">
                    <i class="fas fa-bars" id="btn_open"></i>
                </div>
                <div class="dropdown" id="dropdown">
                  <button onclick="handleDropdownClicked(event)" style="background-color: transparent !important;">
                    <span class="material-symbols-outlined"> settings </span>
                    {{ Auth::user()->name }}
                    <span id="icon" class="material-symbols-outlined"> expand_more </span>
                  </button>
                  <div class="menu">
                    <button>
                        <a href="{{route('editclases')}}">
                            <span class="material-symbols-outlined"> logout </span>
                          Actualizar Clases
                        </a>
                    </button>
                    <button>
                      <span class="material-symbols-outlined"> description </span>
                      Actualizar perfil
                    </button>
                    <button >
                        <a href="{{route('logout')}}">
                            <span class="material-symbols-outlined"> logout </span>
                          Cerrar sesion
                        </a>
                    </button>
                  </div>
                </div>
            </header>
            <main>
                <div class="contenido-app">
                    @yield('content')
                </div>
                <div class="footer-app">
                   <div class="contene" style="display: flex; flex-direction:column;">
                    <p>Desarrollador por IS-UNAH</p><br>
                   
                   </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>
</html>