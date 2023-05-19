@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <p>Usuarios que tienen el rol: {{ $rol->name }}</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Permisos</th>
                                        <th>Quitar rol </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->name }}</td>
                                            <td>
                                                @foreach ($usuario->permissions as $permiso)
                                                    <span class="badge badge-primary">{{ $permiso->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <form action="{{ route('quitarrol', [$usuario, $rol]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Quitar rol</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-header">
                        <p>Usuarios que no tienen el rol {{ $rol->rol }}</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Permisos</th>
                                        <th>Agregar rol </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuariosn as $usuario)
                                        <tr>
                                            <td>{{ $usuario->name }}</td>
                                            <td>
                                                @foreach ($usuario->permissions as $permiso)
                                                    <span class="badge badge-primary">{{ $permiso->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <form action="{{ route('agregarrol', [$usuario, $rol]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-primary btn-sm">Agregar rol</button>
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
    </div>
@endsection