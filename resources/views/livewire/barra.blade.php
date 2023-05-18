<div class="responsive-wrapper">
    <div class="conta">
        <div class="main-header" style="display: flex; flex-direction:column; align-items: flex-start;">
            <h3>{{auth()->user()->student->universidad->shortname}}</h3>  
        </div>
        <div class="main-header">
            <h1>{{ $carrera->name }}</h1>

        </div>
        <div class="horizontal-tabs">
                <a href="#" @if($status == 1) class="active" @endif  wire:click="changeStatus(1)">Participantes</a>
                <a href="#" @if($status == 2) class="active" @endif wire:click="changeStatus(2)">Informacion</a>
                <a href="#"@if($status == 3) class="active" @endif wire:click="changeStatus(3)">Clases</a>
        </div>
    </div>
    @if($status == 1)
    <div class="content-header">
        <div class="content-header-intro">
            <h2>Participantes de la carrera: {{ $carrera->name }}</h2>
            <p>Estos son los participantes de la carrera</p>
        </div>
    </div>
    <div class="content" style="display: flex; flex-direction:column;">

            <table class="table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Carrera</th>
                        <th>Centro</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($carrera->students as $estudiante)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td style="display: flex; align-items: center;">
                                <div class="container d-flex align-items-center">
                                    <div class="icon">
                                        <ion-icon name="person-outline" class="icono-user"></ion-icon>
                                    </div>
                                    {{ $estudiante->usuario->name }}
                               </div>
                            </td>
                            <td>{{ $estudiante->carrer->name }}</td>
                            <td>{{ $estudiante->universidad->shortname }}</td>
                        </tr>
                    @empty
                        <div class="content-header">
                            <div class="content-header-intro">
                                <h2>No hay estudiantes en esta carrera</h2>
                                <p>Por favor, intente mas tarde</p>
                            </div>
                        </div>
                    @endforelse   
                </tbody>
            </table>


            
    </div>
    @elseif($status == 2)
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Info: {{ $carrera->name }}</h2>
                <p> Estas son algunas de las caracteristicas de la carrera</p>
            </div>
        </div>
        <div class="container">
            <table class="table">
                <tbody>
                  <tr>
                    <th>Total Clases:</th>
                    <td> {{ $carrera->puente->count() }}</td>
                  </tr>
                  <tr>
                    <th>Total UV:</th>
                    <td> {{ $carrera->puente->sum('clase.UV') }}</td>
                  </tr>
                  <tr>
                    <th>Total companeros:</th>
                    <td> {{ $carrera->students->count() }}</td>
                  </tr>
                    <tr>
                        <th>Universidades donde esta esta carrera:</th>
                        <td style="display: flex; flex-direction:column;"> 
                            @foreach ($carrera->unis as $uni)
                                <P>{{ $uni->shortname }} </P>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Periodos en plan de estudio:</th>
                        <td> {{ $carrera->periodos}}</td>
                    </tr>
                </tbody>
              </table>
        </div>
        
        
    @else
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Clases de la carrera: {{ $carrera->name }}</h2>
                <p >Total: {{ $carrera->puente->count() }}</p>
            </div>
        </div>
        <div class="content">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Codigo</th>
                        <th>UV</th>
                        <th>Departamento</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($carrera->puente as $clase)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $clase->clase->name }}</td>
                            <td>{{ $clase->clase->codigo }}</td>
                            <td>{{ $clase->clase->UV }}</td>
                            <td>{{ $clase->clase->departa->name }}</td>
                            
                        </tr>
                    @empty
                        <div class="content-header">
                            <div class="content-header-intro">
                                <h2>No hay clases en esta carrera</h2>
                                <p>Por favor, intente mas tarde</p>
                            </div>
                        </div>
                    @endforelse   
                </tbody>

            </table>
        </div>

    @endif
</div>