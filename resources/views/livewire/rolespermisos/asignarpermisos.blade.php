@extends('layouts.app')

@section('title', 'Asignar Permisos')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p>Asignar Permisos al Rol de: {{ $role->name }}</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Asignar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permisosn_role as $permiso)
                                <tr>
                                    <td>{{ $permiso->name }}</td>
                                    <td>{{ $permiso->description }}</td>
                                    <td>
                                        <form action="{{ route('asignarpermiso', [$role, $permiso]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-primary btn-sm">Asignar</button>
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
                <p>Permisos asignados al Rol de: {{ $role->name }}</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permisos_role as $permiso)
                                <tr>
                                    <td>{{ $permiso->name }}</td>
                                    <td>
                                        <form action="{{ route('quitarpermiso', [$role, $permiso]) }}" method="POST">
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

@endsection