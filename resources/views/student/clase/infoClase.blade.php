@extends('layouts.homees')


@section('css')
    <link rel="stylesheet" href={{ asset('css/style-clases.css') }}>
@endsection

@section('content')
    <div class="info-user">
        <div class="info-apli">
            <div class="title">
                <ion-icon name="settings-outline" style="font-size: 50px; color: #000; margin-right: 10px;"></ion-icon>
                <h2>{{$clase->clase->name}}</h2>
            </div>
        </div>
        <div class="info-apli">
            

            <div class="button-container">
                <div class="button">
                    <label style="transition: 0.5s;" class="rotate" >
                        <ion-icon 
                        class="icon"
                    name="add-circle-outline"></ion-icon>
                    </label>
                    <p>Datos de la clase</p>
                    <input type="checkbox"  class="radio" style="display:none;">
                </div>
                <div class="contenidoinf show">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <h5>Nombre:</h5>
                                </td>
                                <td>
                                    {{$clase->clase->name}}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <h5>Codigo:</h5>
                                </td>
                                <td>
                                    {{$clase->clase->codigo}}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <h5>UV:</h5>
                                </td>
                                <td>
                                    {{$clase->clase->UV}}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <h5>Periodo:</h5>
                                </td>
                                <td>
                                    {{$periodo}}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <h5>Año:</h5>
                                </td>
                                <td>
                                    {{$anio}}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <h5>Participantes:</h5>
                                </td>
                                <td>
                                    {{$clase->clase->students->count()}}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <h5>Departamento</h5>
                                </td>
                                <td>
                                    {{ $clase->clase->departa->name }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="button-container">
                <div class="button">
                    <label style="transition: 0.5s;">
                        <ion-icon 
                        class="icon"
                    name="add-circle-outline"></ion-icon>
                    </label>
                    <p>Requisitos</p>
                    <input type="checkbox"  class="radio" style="display:none;">
                </div>
                <div class="contenidoinf">
                    @if($clase->requisitos->count() > 0)
                    <table class="table">
                        <thead class="fila1">
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Codigo</th>
                          </tr>
                        </thead>
                        <tbody>
                    @endif
                     @forelse($clase->requisitos as $requisito)
                        <tr>

                            <td scope="row">
                                {{$requisito->name}}
                            </td>
                            <td>
                                {{$requisito->codigo}}
                            </td>
                        </tr>
                     @empty
                       <p>Esta clase no tiene requisitos</p>
                    @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
            
        </div>

    </div>

    <div class="muestra-informacion-principal">
        <div class="info-apli">
            <div class="title">
                <ion-icon name="people-outline"
                style="font-size: 50px; color: #000; margin-right: 10px;">
                ></ion-icon>
                <h4>Participantes: {{$clase->clase->students->count()}}</h4>
            </div>
        </div>
        <div class="info-apli">
             @forelse($clase->clase->students as $user)
                @component('components.user', ['user' => $user])
                @endcomponent
             @empty
                <p>No hay personas que puedan llevar esta clase</p>
            @endforelse
        </div>
    </div>
@endsection

@section('js')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    const button = document.querySelectorAll('.button');

    button.forEach((btn) => {
    btn.addEventListener('click', () => {
        btn.nextElementSibling.classList.toggle('show');
        btn.firstElementChild.classList.toggle('rotate');
        })
    })

</script>
@endsection


