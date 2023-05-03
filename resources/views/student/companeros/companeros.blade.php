@extends('layouts.homees')
@section('css')
@endsection
@section('content')
<main class="main">
	<div class="responsive-wrapper">
		<div class="conta">
            <div class="main-header"> 
                <h1>{{ $carrera->name }}</h1>
            </div>
            <div class="main-header">
                <h3>UNAH-CURLP</h3>

            </div>
            <div class="horizontal-tabs">
                <a href="#" class="active">Estudiantes</a>
                <a href="#">Informacion</a>
                <a href="#">Clases</a>
            </div>
        </div>
		<div class="content-header">
			<div class="content-header-intro">
				<h2>Mostrando participantes de la carrera: {{ $carrera->students->count() }}</h2>
                <p>Estos son los participantes de la carrera</p>
			</div>
		</div>
		<div class="content" style="display: flex; flex-direction:column;">
            @foreach ($carrera->students as $estudiante)
                @component('components.user', ['user' => $estudiante])
                @endcomponent
            @endforeach
		</div>
	</div>
    
</main>
<x-footer/>
@endsection

@section('scripts')
<script src="{{ asset('js/interactions.js') }}"></script>
@endsection

