<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jefecontroller;

Route::middleware(['role:jefedepartamento' ])->group(function () {
    // rutas para el jefe de departamento
    Route::get('/homejefe',[jefecontroller::class, 'homejefe'])->name('homejefe')->middleware('auth');

})->middleware('auth');


Route::get('/practicas',[jefecontroller::class, 'practicas'])->name('practicas');