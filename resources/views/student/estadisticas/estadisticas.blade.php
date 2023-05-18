@extends('layouts.homees')
@section('css') 
<link rel="stylesheet" href="{{ asset('css/style-estadisticas.css') }}">
@endsection

@section('content')
    <main class="main" style="margin-top: 10px !important;">
        <div class="responsive-wrapper" 
        style="position: sticky; 
               top:7vh; 
               background: #fff; 
               padding: 10px;
               z-index: 1000;
        ">
            <div class="conta">
                <div class="main-header"> 
                    <h1>Estadisticas:</h1>
                </div>
                <p>Estas son tus estadisticas en la carrera de {{$carrera->name}}</p>
                <hr>
            </div>
        </div>
        <div class="responsive-wrapper"  >
            <div class="row ">
                <div class="main-header"> 
                    <h1>Generales:</h1>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text ">Clases</p> 
                            <h6 class="card-subtitle mb-2 text-muted " >Clases de la carrera</h6>
                            <h5 class="card-title text-center">{{$clasesestudiante}}/{{ $clasescarrera }}</h5>
                            <div class="barra-gris">
                                <div class="barra-amarilla" style="width: {{$pocentajeClases}}%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <p class="card-text ">UV</p> 
                          <h6 class="card-subtitle mb-2 text-muted " >Unidades Valorativas</h6>
                         <h5 class="card-title text-center">{{$UV}}/{{ $totalUV }}</h5>
                         <div class="barra-gris">
                            <div class="barra-amarilla" style="width: {{ $porcentajeUV}}%;"></div>
                         </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <p class="card-text ">Periodos</p> 
                          <h6 class="card-subtitle mb-2 text-muted " >Periodos en plan de estudios</h6>
                         <h5 class="card-title text-center">{{$periodospasados}}/{{$periodos}}</h5>
                         <div class="barra-gris">
                            <div class="barra-amarilla" style="width: {{$periodospasados * 100 / $periodos}}%;"></div>
                         </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text ">Promedio clases</p> 
                            <h6 class="card-subtitle mb-2 text-muted ">Promedio clases / periodo</h6>
                            <h5 class="card-title text-center">{{$promedioclases}}</h5>
                            <div class="barra-gris">
                                <div class="barra-amarilla" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card main-header mt-2 p-3"> 
                        <h1>Periodo en la carrera:</h1>
                        <p>
                            Estas en el periodo {{$periodospasados}} de la carrera de {{ $carrera->name }}.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="card col-lg-5 ">
                    
                    <div class="main-header"> 
                        <h1>Tus estadisticas:</h1>
                    </div>
                    <div >
                        <div class="content">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Estadistica</th>
                                        <th>Valor</th>
                                        <th>Porcentaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Clases Pasadas:</th>
                                        <td>{{ $clasesestudiante }}</td>
                                        <td>{{ $pocentajeClases }}%</td>
                                    </tr>
                                    <tr>
                                        <th>Clases por pasar:</th>
                                        <td>{{ $clasescarrera - $clasesestudiante }}</td>
                                        <td>{{ 100 - $pocentajeClases }}%</td>
                                    </tr>
                                    
                                    <tr>
                                        <th> UV pasadas:</th>
                                        <td>{{ $UV }}</td>
                                        <td>{{ $porcentajeUV }}%</td>
                                    </tr>
                                    <tr>
                                        <th>UV por pasar:</th>
                                        <td>{{ $totalUV - $UV }}</td>
                                        <td>{{ 100 - $porcentajeUV }}%</td>
                                    </tr>
                                    <tr>
                                        <th> Periodos pasados:</th>
                                        <th>{{$periodospasados}}</th>
                                        <th>{{ round($periodospasados * 100 / $periodos,2) }}%</th>    
                                    </tr>
                                    <tr>
                                        <th>Periodos por pasar ({{$promedioclases}}clases/periodo ):</th>
                                        <th>{{$periodos - $periodospasados}}</th>
                                        <th>{{ round((($periodos - $periodospasados) * 100 / $periodos),2) }}%</th>
                                    </tr>        
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                 


                </div>
                <div class="col-lg-7 pl-5 ">
                    <div class="main-header"> 
                        <h1>Por departamento:</h1>
                    </div>
                    @foreach ($departamentos as $departamento)
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $departamento['departamento'] }}</h5>
                                <div class="container-informa">
                                    <p class="card-text informa">Clases: {{ $departamento["clases"] }}</p>
                                    <p class="card-text informa">Pasadas: {{ $departamento["clasesestudiante"] }}</p>
                                    <p class="card-text informa">UV: {{ $departamento["uvtotal"] }}</p>
                                    <p class="card-text informa">Pasadas:{{ $departamento["uv"] }}</p>
                                       
                                        <p></p>
                                </div>
                              
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        
        <x-footer></x-footer>
    </main>
@endsection
@section('js')

@endsection
