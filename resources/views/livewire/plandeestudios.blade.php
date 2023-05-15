<div>
    <div class="content-header">
        <div class="content-header-intro">
            <h2>Generando plan de estudio automaticamente</h2>
            <p>Instrucciones: Se generara un plan de estudio automaticamente, para ello selecciona la cantidad minima de clases que deseas que se te asignen, luego presiona el boton generar plan de estudio</p>
        </div>
    </div>
        <div class="content">
            <div class="content-panel" style="position: sticky; top:10vh;">
                <div class="vertical-tabs" >
                    <a  @if($cant ==  2) class="active" @endif wire:click="setcantClases(2)">2 clases</a>
                    <a  @if($cant ==  3) class="active" @endif wire:click="setcantClases(3)">3 clases</a>
                    <a  @if($cant == 4) class="active" @endif  wire:click="setcantClases(4)">4 clases</a>
                    <a  @if($cant == 5) class="active" @endif wire:click="setcantClases(5)">5 clases</a>
                    <a  @if($cant == -1) class="active" @endif wire:click="setcantClases(-1)">Todo</a>
                </div>
            </div>
            <div class="content-main"  >
                <div class="horizontal-tabs" style="margin-top: 0 !important; position: sticky; top:7vh; background-color:#fff;  padding:22px;">
                    <a  @if($opcion ==  1) class="active" @endif wire:click="setopcion(1)">Plan de estudio</a>
                    <a  @if($opcion ==  2) class="active" @endif wire:click="setopcion(2)">Informacion</a>
                    <a  @if($opcion ==  3) class="active" @endif wire:click="openModal" id="desactivar">UNAHversion</a>
                </div>
                <div class="card-grid" style="flex-direction: column;"> 
                    @if($opcion == 1 )
                        @forelse($clasesperiodo1 as $periodo)
                        <div class="content-header-intro">
                            <h2>Periodo: {{$periodo["periodo"]}}</h2>
                            <div class="" style="display: flex; overflow-x: auto; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                                    <p class="informa">clases: {{$periodo["cant"]}}  </p>
                                    <p class="informa" style="margin-left: 10px;">UV:{{$periodo["uv"]}} </p>
                                    <p class="informa" style="margin-left: 10px">Promedio Min: {{$periodo["promedio"]}} </p>
                                    <p class="informa" style="margin-left: 10px">Año: {{$periodo["anio"]}} </p>
                            </div>
                        </div>
                        <div class="periodo">
                            @forelse($periodo["clases"] as $clase)
                            @php
                                $clase = $clase->clase;
                            @endphp
                            <article class="card-clase" style="margin-top: 10px;">
                                <div class="card-uv">
                                    <p class="description active">UV: {{$clase->UV}}</p>
                                </div>
                                <div class="card-informacion">  
                                    <h4 class="name" style="text-align: center;">{{$clase->name}}</h4>
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
                @elseif($opcion == 2)
                <div class="container">
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Periodos restantes:</th>
                          <td>{{$periodosrestantes}}</td>
                        </tr>
                        <tr>
                          <th>Clases Restantes:</th>
                          <td>
                            {{$clases_restantes}}
                          </td>
                        </tr>
                        <tr>
                          <th>UV restantes:</th>
                          <td>{{$totalUV}}</td>
                        </tr>
                        <tr>
                            <th>Periodo aproximado de salida con este plan :</th>
                            <td>{{$salida}}</td>
                        </tr>
                        <tr>
                            <th>Fecha en la que se creo el plan:</th>
                            <td>{{$fechaactual}}</td>
                        </tr>
                        <tr>
                            <th>Restante:</th>
                            <td>{{$restantes}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                @elseif($opcion == 3)
                  <div class="container-periodo">
                        <div class="plandeestudio">
                            <div class="linea-cerrar">
                                <i class="fa-regular fa-circle-xmark"  wire:click="setopcion(1)"  id="activar" ></i>
                            </div>
                            <div class="contenedor-plan">
                                    <div class="plan-content">
                                        @foreach($periodo2 as $periodo)
                                            <div class="cuadro-periodo">
                                                <div class="linea-anio">
                                                    <div class="linea-amarilla">
                                                        <p class="info-per">Periodo {{$periodo["anio"]}}</p>
                                                    </div>
                                                    @if(($periodo["periodo"] - 1) % 3 == 0)
                                                        <div class="linea-azul">
                                                            <p class="info-per">Anio: {{(($periodo["periodo"]-1) / 3 )+1}}</p>
                                                        </div>
                                                    @endif
                                                </div>
                                                <table class="table table-plan">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Codigo</th>
                                                        <th scope="col">asignatura</th>
                                                        <th scope="col">UV</th>
                                                        <th scope="col">Requisito</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($periodo["clases"] as $puente)
                                                        <tr id="{{$puente->clase->codigo}}" style="border-style:none;">
                                                            <th scope="row">{{ $puente->clase->codigo }}</th>
                                                            <td>{{ $puente->clase->name }}</td>
                                                            <td>{{$puente->clase->UV}}</td>
                                                            <td >
                                                                <div class="div" style="display: flex;">
                                                                    @forelse($puente->requisitos as $requisito)
                                                                        <input type="text" value="{{$requisito->codigo}}" name="requisi" id="r{{$requisito->codigo}}" class="codigo-container" readonly/> , 
                                                                    @empty
                                                                        Ninguno
                                                                    @endforelse
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                            <div class="card">
                                                                <h3>Nada disponible para mostrar</h3>
                                                            </div>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                                </div>
                                        @endforeach   
                                </div>
                            </div>
                  </div>
                  <!-- este script es para que cuando se abra el modal se desactive el scroll -->
                  <script>
                    var activar = document.getElementById('activar');
                        activar.addEventListener('click', function() {
                        document.body.style.overflow = 'auto';
                    });
                  </script>
                @endif
                </div>
            </div>
        </div>
        <script>
            // seleccionar todos los input de con el nombre requisi y ponerlos en un array para agregarles el evento de que se pone el mouse encima
            var requisitos = document.getElementsByName('requisi');
            var requisitosArray = Array.from(requisitos);
            requisitosArray.forEach(element => {
                element.addEventListener('mouseover', function() {
                    var id = element.value;
                    var clase = document.getElementById(id);
                    clase.style.backgroundColor = '#f2f2f2';
                });
                element.addEventListener('mouseout', function() {
                    var id = element.value;
                    var clase = document.getElementById(id);
                    clase.style.backgroundColor = '#fff';
                });
            });
            var desactivar = document.getElementById('desactivar');
                    desactivar.addEventListener('click', function() {
                                    document.body.style.overflow = 'hidden';
                    });
        </script>
</div>
