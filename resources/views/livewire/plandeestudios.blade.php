<div>
    <div class="content-header">
        <div class="content-header-intro">
            <h2>Generando plan de estudio automaticamente</h2>
            <p>Instrucciones: Se generara un plan de estudio automaticamente, para ello selecciona la cantidad de clases que deseas cursar por periodo</p>

        </div>
    </div>
        <div class="content">
            <div class="content-panel" style="position: sticky; top:10vh;">
                <div class="vertical-tabs" >
                    <a href="#" @if($cant ==  3) class="active" @endif wire:click="setcantClases(3)">3 clases</a>
                    <a href="#" @if($cant == 4) class="active" @endif  wire:click="setcantClases(4)">4 clases</a>
                    <a href="#" @if($cant == 5) class="active" @endif wire:click="setcantClases(5)">5 clases</a>
                    <a href="#" @if($cant == 5) class="active" @endif wire:click="setcantClases(5)">Todo</a>
                </div>
            </div>
            <div class="content-main"  >
                <div class="horizontal-tabs" style="margin-top: 0 !important; position: sticky; top:7vh; background-color:#fff;  padding:22px;">
                    
                    <a href="#" class="active" >Plan de estudio</a>
                    <a href="#">Info</a>
                    <a href="#">Version plan de estudio UNAH</a>
                    
                    <hr>
                </div>
                
                <div class="card-grid" style="flex-direction: column;"> 
                    @forelse($clasesperiodo1 as $periodo)
                        <div class="content-header-intro">
                            <h2>Periodo: {{$periodo["periodo"]}}</h2>
                           <div class="" style="display: flex;">
                                <p class="informa">clases: {{$periodo["cant"]}}  </p>
                                <p class="informa" style="margin-left: 10px;">UV:{{$periodo["uv"]}} </p>
                                <p class="informa" style="margin-left: 10px">20/02/2023 </p>

                           </div>
                        </div>
                       
                        <div class="periodo">
                            
                            @forelse($periodo["clases"] as $clase)
                            <article class="card-clase" style="margin-top: 10px;">
                                <div class="card-uv">
                                    <p class="description active">UV: {{$clase->UV}}</p>
                                </div>
                                <div class="card-informacion">  
                                    <h4 class="name">{{$clase->name}}</h4>
                                    <p>{{ $clase->codigo }}</p>            
                                </div>
                                
                            </article>
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

        <script>
           
        </script>
</div>
