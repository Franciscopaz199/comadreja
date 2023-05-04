<div class="responsive-wrapper">
    <div class="conta">
        <div class="main-header"> 
            <h1>{{ $carrera->name }}</h1>
        </div>
        <div class="main-header">
            <h3>UNAH-CURLP</h3>
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
     
        </div>
    @else
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Mostrando Clases de la carrera: {{ $carrera->name }}</h2>
                <p>Total: {{ $carrera->puente->count() }}</p>
            </div>
        </div>
        <div class="content-main">
            <div class="card-grid">
                @forelse ($carrera->puente as $puente)
                <article class="card-m">
                    <div class="card-header-m">
                        <div>
                            <h4>{{ $puente->clase->name }}</h4>
                        </div>
                        
                    </div>
                    <div class="card-body-m">
                        <p class="description">UV: {{$puente->clase->UV}}</p>
                    </div>
                    <div class="card-footer-m">
                        <p>{{ $puente->clase->codigo }}</p>
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