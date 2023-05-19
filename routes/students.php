<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apli\studentController;

Route::middleware(['role:student' ])->group(function () {
    Route::get('/selectuni',[studentController::class, 'selectuni'])->name('selectuni')->middleware('auth');
    Route::post('/selectuni',[studentController::class, 'selectuniv'])->name('selectuniv')->middleware('auth');
    // rutas para seleccionar carrera
    Route::get('/selectcarrera',[studentController::class, 'selectcarrera'])->name('selectcarrera')->middleware('auth');
    Route::post('/selectcarrera',[studentController::class, 'selectcarrer'])->name('selectcarrer')->middleware('auth');
    // rutas para seleccionar clases aprobadas
    Route::get('/selectclases',[studentController::class, 'selectclases'])->name('selectclases')->middleware('auth');
    Route::post('/selectclases',[studentController::class, 'checkclase'])->name('checkclase')->middleware('auth');
    // rutas home de estudiante
    Route::get('/homeestudiante',[studentController::class, 'homees']);
    /*Route::get('/homeestudiante',[studentController::class, 'homeestudiante'])->name('home')->middleware('auth');*/
    Route::get('/editclases',[studentController::class, 'editclases'])->name('editclases')->middleware('auth');
    Route::get('/planestudios',[studentController::class, 'planestudios'])->name('planestudios')->middleware('auth');
    Route::get('/crearplan', [studentController::class, 'crearplan'])->name('crearplan')->middleware('auth');
    Route::get('/companeros', [studentController::class, 'companeros'])->name('companeros')->middleware('auth');
    Route::get('/acercade', [studentController::class, 'acercade'])->name('acercade')->middleware('auth');
    Route::get('/util', [studentController::class, 'util'])->name('util')->middleware('auth');
    Route::get('/estadisticas', [studentController::class, 'estadisticas'])->name('estadisticas')->middleware('auth');
    Route::get('/clase', [studentController::class, 'clase'])->name('clase')->middleware('auth');
    // esta ruta es para la clase es decir la  informacion de la clase
    Route::get('/clase2', [studentController::class,'clase2'])->name('clase2')->middleware('auth');
})->middleware('auth');
