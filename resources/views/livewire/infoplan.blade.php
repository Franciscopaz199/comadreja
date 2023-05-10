<div class="content-main"  >
    <div class="horizontal-tabs" style="margin-top: 0 !important; position: sticky; top:7vh; background-color:#fff;  padding:22px;">
        
        <a href="#" class="active" >Plan de estudio</a>
        <a href="#">Info</a>
        <a href="#">Version plan de estudio UNAH</a>
        
        <hr>
    </div>
    
    <div class="card-grid" style="flex-direction: column;"> 
        @forelse($clasesperiodo as $periodo)
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