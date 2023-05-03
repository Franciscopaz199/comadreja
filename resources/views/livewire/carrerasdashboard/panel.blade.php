@extends('layouts.app')
<link href="{{ asset('css/stylescarreras.css') }}" rel="stylesheet">
@section('content')
<div class="contenido">
  <div class="">
      <div class="card-body">
       <h4 class="card-title">
          <p>Editando plan de estudios de la carrera: 
              <span class="text-primary">
                 {{$carrera->name}}
              </span>
          </p>
          <p>
                Total de materias:
                <span class="text-primary">
                    {{$carrera->puente->count()}}
                </span>

          </p>
      </h4>
      </div>
  </div>
 <div class="contenedor-secciones">
  <div class="left-section">
      <div class="title">
          <h4>Agregar una materia</h4>
      </div>
      <div class="body">
          <div class="formularios" style="border: 1px solid rgb(208, 208, 208); box-sizing:border-box; padding:20px;    ">
              <form action="{{route('carrerasagregar')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$carrera->id}}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Codigo</label>
                      <input  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Code Clase" name="codeclass">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Requisito (opcional)</label>
                      <input  type="text" class="form-control" id="exampleInputPassword1" placeholder="Requisito" name="requisitoclass">
                  </div>
                  
                  <button type="submit" class="btn btn-primary" type="submit" style="width: 100% !important;">Agregar</button>
                </div> 
            </form>
      </div>
  </div>
  <div class="rigth-section">
      <div class="title">
          <h4>Lista de materias</h4>
      </div>
      <div class="body">
          <div class="table-responsive">
              <table class="table table-bordered table-sm">
                  <thead class="thead">
                      <tr>
                          <th>Codigo</th>
                          <th>Nombre</th>
                          <th>Requisitos</th>
                          <th>Prioridad</th>
                          <th>accion</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($carrera->puente as $materia)
                              <tr class="selectcar">
                                  <td>{{$materia->clase->codigo}}</td>
                                  <td>{{$materia->clase->name}}</td>
                                  <td>
                                     @forelse ($materia->requisitos as $requisito)
                                        {{$requisito->codigo}}

                                        @empty
                                        <p>ninguno</p>
                                    @endforelse
                              </td>
                                  <td>{{$materia->prioridad}}</td>
                                  <td>
                                    <form method="POST" action={{ route('carreraseliminar')}}>
                                      @csrf
                                      <input type="hidden" name="clase_id" value="{{$materia->id}}">
                                      <input type="hidden" name="id" value="{{$carrera->id}}">
                                      @if($materia->prioridad == 0)
                                        <button type="submit" class="btn btn-danger" type="submit">Eliminar</button>
                                       @else
                                        <button type="submit" class="btn  btn-secondary" type="submit" disabled>Eliminar</button> 
                                       @endif

                                    </form>
                                  </td>
                              </tr> 
                      @endforeach
                  </table>
          </div>
      </div>
  </div>
 </div>

</div>
@endsection