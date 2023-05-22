@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="card">
            <div class="card-header">
                <p>Listado de roles</p>
                <form action="{{ route('crearrol') }}" method="POST">
                    @csrf
                   <div class="container" style="
                        display: flex;
                    ">
                    <input type="text" name="name" placeholder="Nombre del rol" class="form-control form-control-sm">
                    <input type="submit" value="Crear Rol" class="btn btn-primary btn-sm ml-2 text-white text-decoration-none">
                
                   </div>
                </form>
            </div>
            <div class="card-body"
                style="
                    min-height: 400px;
                    max-height: 400px;
                    overflow: auto;
                "
            >
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Permisos</th>
                                <th>Eliminar</th>
                                <th>ver usuarios</th>
                                <th>Asignar permisos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $rol)
                                <tr>
                                    <td>{{ $rol->name }}</td>
                                    <td>
                                        @foreach ($rol->permissions as $permiso)
                                            <span class="badge badge-primary"
                                                style="
                                                    background-color: #3490dc;
                                                    padding: 5px;
                                                "

                                            >{{ $permiso->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{ route('eliminarrol', $rol) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('usuariosporrol', $rol) }}" class="btn btn-primary btn-sm">Ver usuarios</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('asignarpermisos', $rol) }}" class="btn btn-primary btn-sm">Asignar permisos</a>
                                    </td>
                                </tr>
                            @endforeach
    
                        </tbody>
    
                    </table>
                </div>


            </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <p>Listado de permisos</p>
                <form action="{{ route('crearpermiso') }}" method="POST">
                    @csrf
                   <div class="container" style="
                        display: flex;
                    ">
                    <input type="text" name="name" placeholder="Nombre del permiso" class="form-control form-control-sm">
                    <input type="submit" value="Crear Permiso" class="btn btn-primary btn-sm ml-2 text-white text-decoration-none">

                   </div>
                </form>

            </div>
            <div class="card-body"
                style="
                    min-height: 400px;
                    max-height: 400px;
                    overflow: auto;

            ">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permisos as $permiso)
                            <tr>
                                <td>{{ $permiso->name }}</td>
                                <td>
                                    <form action="{{ route('eliminarpermiso', $permiso) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
      </div>
    </div>

      </div>
    
    </div>
  
    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <p>Listado de usuarios</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Roles</th>
                                    <th>permisos directos</th>
                                    <th>permisos por roles</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $usuario)
                                    <tr>
                                        <td>{{ $usuario->name }}</td>
                                        <td>
                                            @foreach ($usuario->roles as $rol)
                                                <span class="badge badge-primary" 
                                                style="
                                                    background-color: #3490dc;
                                                    padding: 5px;
                                                ">{{ $rol->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($usuario->permissions as $permiso)
                                                <span class="badge badge-primary"
                                                style="
                                                background-color: #3490dc;
                                                padding: 5px;
                                            "
                                                
                                                >{{ $permiso->name }}</span>
                                            @endforeach
                                        </td>
                                        
                                        <td>
                                            @foreach ($usuario->getAllPermissions() as $permiso)
                                                <span class="badge badge-primary"
                                                style="
                                                background-color: #3490dc;
                                                padding: 5px;
                                            "
                                                >{{ $permiso->name }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
        
                            </tbody>
        
                        </table>
                    </div>
        </div>
    </div>


  </div>
@endsection