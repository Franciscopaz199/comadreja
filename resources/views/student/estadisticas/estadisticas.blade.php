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
                            <h5 class="card-title text-center">{{ $clasescarrera }}</h5>
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
                         <h5 class="card-title text-center">{{ $totalUV }}</h5>
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
                         <h5 class="card-title text-center">14</h5>
                         <div class="barra-gris">
                            <div class="barra-amarilla" style="width: {{ $porcentajeUV}}%;"></div>
                         </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text ">Promedio clases</p> 
                            <h6 class="card-subtitle mb-2 text-muted " >Promedio clases / periodo</h6>
                            <h5 class="card-title text-center">4</h5>
                            <div class="barra-gris">
                                <div class="barra-amarilla" style="width: {{ $porcentajeUV}}%;"></div>
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
                            Estas en el periodo 7 de la carrera de {{ $carrera->name }}.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 ">
                    
                    <div class="main-header"> 
                        <h1>Tus estadisticas:</h1>
                    </div>
                    <div class="card mt-3">
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
                                        <th>Total de clases Pasadas:</th>
                                        <td>{{ $clasesestudiante }}</td>
                                        <td>{{ $pocentajeClases }}%</td>
                                    </tr>
                                    <tr>
                                        <th>Total de clases por pasar:</th>
                                        <td>{{ $clasescarrera - $clasesestudiante }}</td>
                                        <td>{{ 100 - $pocentajeClases }}%</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Total de UV pasadas:</th>
                                        <td>{{ $UV }}</td>
                                        <td>{{ $porcentajeUV }}%</td>
                                    </tr>
                                    <tr>
                                        <th>Total de UV por pasar:</th>
                                        <td>{{ $totalUV - $UV }}</td>
                                        <td>{{ 100 - $porcentajeUV }}%</td>
                                    </tr>
                                    <tr>
                                        <th>Total de Periodos pasados:</th>
                                        <th>7</th>
                                        <th>65%</th>    
                                    </tr>        
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                 


                </div>
                <div class="col-lg-7 pl-5">
                    <div class="main-header"> 
                        <h1>Por departamento:</h1>
                    </div>
                    @foreach ($departamentos as $departamento)
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $departamento->name }}</h5>
                                <div class="container-informa">
                                    <p class="card-text informa">Clases: {{ $departamento->clases_carrera()["total"] }}</p>
                                    <p class="card-text informa">Pasadas: {{ $departamento->clases_estudiante()['total'] }}</p>
                                    <p class="card-text informa">UV: {{ $departamento->clases_carrera()["uv"] }}</p>
                                    <p class="card-text informa">Pasadas:{{ $departamento->clases_estudiante()["uv"] }} </p>
                                    <p></p>
                                </div>
                               <!--
                                     <p>Clases: {{ round($departamento->clases_estudiante()['total']*100 / $departamento->clases_carrera()['total'], 2 )}}%</p>
                                <div class="barra-gris">
                                    <div class="barra-amarilla" style="width: {{ $departamento->clases_estudiante()['total']*100 / $departamento->clases_carrera()['total'] }}%;">
                                </div> 
                               -->
                                
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
