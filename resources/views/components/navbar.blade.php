<div class="headerpage" >
      <h5>{{ config('app.name', '') }}</h5>
    <li class="nav-item dropdown" style="list-style: none;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{
            Auth::user()->name
          }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @can('editar clases')
            <a class="dropdown-item" href="{{route('editclases')}}">Editar Clases</a>
          @endcan
          @can('editar perfil')
            <a class="dropdown-item" href="#">Editar Perfil</a>
          @endcan
          <a class="dropdown-item" href="{{route('logout')}}">Cerrar Sesion</a>
        </div>
      </li>
</div>