<div class="responsive-wrapper">
    <div class="conta">
        <div class="main-header" style="display: flex; flex-direction:column; align-items: flex-start;">
            <h3>{{auth()->user()->student->universidad->shortname}}</h3>  
            <h3>{{auth()->user()->student->universidad->name}}</h3>           
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
            <h2>Mostrando participantes de la carrera: {{ $carrera->students->count() }}</h2>
            <p>Estos son los participantes de la carrera</p>
        </div>
    </div>
    <div class="content" style="display: flex; flex-direction:column;">
            @forelse ($carrera->students as $estudiante)
                @component('components.user', ['user' => $estudiante])
                @endcomponent
            @empty
                <div class="content-header">
                    <div class="content-header-intro">
                        <h2>No hay estudiantes en esta carrera</h2>
                        <p>Por favor, intente mas tarde</p>
                    </div>
                </div>
            @endforelse   
    </div>
    @elseif($status == 2)
        <div class="content-header">
            <div class="content-header-intro">
                <p>Esta es la informacion de la carrera</p>
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
                </tbody>
              </table>
        </div>
        
        
    @else
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Mostrando Clases de la carrera: {{ $carrera->name }}</h2>
                <p class="informa">Total: {{ $carrera->puente->count() }}</p>
            </div>
        </div>
        <div class="content-main" 
            style="
                width: 100% !important;
            "
        >
            <div class="card-grid"
                style=" 
                width: 100% !important;
                    display: grid !important;
                    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)) !important;" 
            >
                @forelse ($carrera->puente as $puente)
                @php
                    $clase = $puente->clase;
                @endphp
                <article class="card-clase" style="margin-top: 10px;
                      background-color: var(--c-background-primary) !important;
                        box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.05), 0 5px 15px 0 rgba(0, 0, 0, 0.05) !important;
                        border-radius: 8px !important;
                        overflow: hidden !important;
                        display: flex !important;
                        flex-direction: column !important;
                        box-sizing: border-box !important;
                        transition: all 0.3s ease-in-out !important;
                        padding: 30px !important;
                ">
                    <div class="card-informacion">  
                       
                        <p>{{ $clase->codigo }}</p>            
                        <h4 class="name">{{$clase->name}}</h4>
                    </div>
                    <div class="card-uv"
                        style="
                            background-color: #fff !important;
                        "
                    >
                        <p class="description active">UV: {{$clase->UV}}</p>
                    </div>
                </article>
                @empty
                    <div class="content-header">
                        <div class="content-header-intro">
                            <h2>No hay clases en esta carrera</h2>
                            <p>Por favor, intente mas tarde</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

    @endif
</div>