@extends('layouts.homees')
@section('css')
@livewireStyles
<link rel="stylesheet" href={{ asset('css/components.css') }}>
@endsection
@section('content')
<main class="main">
	<div class="responsive-wrapper">
		<div class="conta">
            <div class="main-header"> 
                <h1>Generando Plan de estudio</h1>
            </div>
        </div>
		<livewire:secciones :carrera="$carrera" />  
	</div>
</main>
<x-footer/>
@livewireScripts
@endsection
@section('scripts')
<script src="{{ asset('js/interactions.js') }}"></script>
@endsection

