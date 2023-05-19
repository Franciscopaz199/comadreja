<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\carrerasdash;

// ruta para administrar los roles y permisos
Route::get('Rolespermisos', [App\Http\Controllers\Admincontroller::class, 'Rolespermisos'])->name('Rolespermisos')->middleware('auth');
Route::post('crearrol', [App\Http\Controllers\Admincontroller::class, 'crearrol'])->name('crearrol')->middleware('auth');
Route::post('crearpermiso', [App\Http\Controllers\Admincontroller::class, 'crearpermiso'])->name('crearpermiso')->middleware('auth');
Route::delete('eliminarrol/{rol}', [App\Http\Controllers\Admincontroller::class, 'eliminarrol'])->name('eliminarrol')->middleware('auth');


Route::middleware(['role:admin' ])->group(function () { 
    // rutas del administrador
    Route::view('jefesdepartamentos', 'livewire.jefesdepartamentos.index')->middleware('auth');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::view('clases', 'livewire.clases.index')->middleware('auth');
    Route::view('unihascarreras', 'livewire.unihascarreras.index')->middleware('auth');
    Route::view('carreras', 'livewire.carreras.index')->middleware('auth');
    Route::view('facultades', 'livewire.facultades.index')->middleware('auth');
    Route::view('unis', 'livewire.unis.index')->middleware('auth');
    Route::view('uni', 'livewire.uni.index')->middleware('auth');
    Route::view('departamentos', 'livewire.departamentos.index')->middleware('auth');
    Route::get('carreras/dash', [carrerasdash::class, 'render'])->name('carrerasd')->middleware('auth');
    Route::get('carreras/panel', [carrerasdash::class, 'panel'])->name('carreraspanel')->middleware('auth');
    //  eliminar clase de carrera
    Route::post('carreras/eliminar', [carrerasdash::class, 'eliminar'])->name('carreraseliminar')->middleware('auth');
    // agregar clase a carrera
    Route::post('carreras/agregar', [carrerasdash::class, 'agregar'])->name('carrerasagregar')->middleware('auth');
    // ruta para universidades tienen carreras	
    Route::get('universidades/{id}/carreras', [App\Http\Controllers\UniversidadController::class, 'carreras'])->name('universidades.carreras');
    // Rutas para apli
});