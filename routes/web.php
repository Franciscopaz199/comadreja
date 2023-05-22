<?php

use Illuminate\Support\Facades\Route;
// CONTROLADORES
use App\Http\Controllers\apli\aplicontroller;

Route::get('/', function () {
    return view('login.index');
});

// rutas para el login
Route::get('/index', [aplicontroller::class, 'index'])->name('apli')->middleware('auth');
Route::get('/login', [aplicontroller::class, 'login'])->name('login');
Route::get('/register', [aplicontroller::class, 'register'])->name('register');
Route::post('/create', [aplicontroller::class, 'create'])->name('create');
Route::post('/iniciar', [aplicontroller::class, 'iniciar'])->name('iniciar');
Route::get('/logout', [aplicontroller::class, 'logout'])->name('logout');






/*
// recibir una variable de la url
Route::get('prueba/{id}' , function ($id) {
    return view('prueba', compact('id'));
})->name('prueba');
*/
//Route Hooks - Do not delete//
	Route::view('departamentos', 'livewire.departamentos.index')->middleware('auth');