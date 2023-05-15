@extends('layouts.homees')
@section('css')

@livewireStyles
@endsection
@section('content')
<main class="main">
    <livewire:barra :carrera="$carrera" />  
</main>
<x-footer/>
@livewireScripts
@endsection
@section('scripts')
<script src="{{ asset('js/interactions.js') }}"></script>
@endsection

