<div>
    <div class="content-header">
        <div class="content-header-intro">
            <h2>Generando plan de estudio automaticamente</h2>
            <p>Se generara un plan de estudio automaticamente</p>
        </div>
    </div>
        <div class="content">
            <div class="content-panel">
                <div class="vertical-tabs">
                    <a href="#" @if($cant ==  3) class="active" @endif wire:click="setcantClases(3)">3 clases</a>
                    <a href="#" @if($cant == 4) class="active" @endif  wire:click="setcantClases(4)">4 clases</a>
                    <a href="#" @if($cant == 5) class="active" @endif wire:click="setcantClases(5)">5 clases</a>
                    <a href="#" @if($cant == 5) class="active" @endif wire:click="setcantClases(5)">Todo</a>
                </div>
            </div>
            <div class="content-main">
                <div class="horizontal-tabs" style="margin-top: 0 !important">
                    <a href="#" class="active" >Plan de estudio</a>
                    <a href="#">Info</a>
                    <a href="#">Version plan de estudio UNAH</a>
                </div>
                <hr>
                <div class="card-grid"> 
                    @forelse($clasesperiodo1 as $periodo)
                        <div class="periodo">
                            @forelse($periodo as $clase)
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{$clase->name}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>{{$clase->descripcion}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Agregar</a>
                                    </div>
                                </div>
                        
                            @empty
                            <div class="card">
                                <h3>Nada disponible para mostrar</h3>
                            </div>
                        @endforelse
                        </div>
                      
                    @empty
                        <div class="card">
                            <h3>Nada disponible para mostrar</h3>
                        </div>
                    @endforelse
                    
                </div>
            </div>
        </div>
</div>
