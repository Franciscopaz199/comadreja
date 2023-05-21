<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apli\studentController;

Route::middleware(['role:estudiante' ])->group(function () {
    Route::get('/selectuni',[studentController::class, 'selectuni'])
    ->name('selectuni')
    ->middleware(['permission:elegir universidad']);

    Route::post('/selectuni',[studentController::class, 'selectuniv'])
    ->name('selectuniv')
    ->middleware(['permission:elegir universidad']);
    
    // rutas para seleccionar carrera
    Route::get('/selectcarrera',[studentController::class, 'selectcarrera'])
    ->name('selectcarrera')
    ->middleware(['permission:elegir carrera']);

    Route::post('/selectcarrera',[studentController::class, 'selectcarrer'])
    ->name('selectcarrer')
    ->middleware(['permission:elegir carrera']);

    // rutas para seleccionar clases aprobadas
    Route::get('/selectclases',[studentController::class, 'selectclases'])
    ->name('selectclases')
    ->middleware(['permission:seleccionar clases']);

    Route::post('/selectclases',[studentController::class, 'checkclase'])
    ->name('checkclase')
    ->middleware(['permission:seleccionar clases']);
    // rutas home de estudiante
    Route::get('/homeestudiante',[studentController::class, 'homees'])
    ->name('homees');
    /*Route::get('/homeestudiante',[studentController::class, 'homeestudiante'])->name('home')->middleware('auth');*/
    Route::get('/editclases',[studentController::class, 'editclases'])
    ->name('editclases')
    ->middleware(['permission:editar clases']);

    Route::get('/planestudios',[studentController::class, 'planestudios'])
    ->name('planestudios')
    ->middleware(['permission:ver plan de estudios']);
    Route::get('/crearplan', [studentController::class, 'crearplan'])
    ->name('crearplan')
    ->middleware('auth');
    Route::get('/companeros', [studentController::class, 'companeros'])
    ->name('companeros')
    ->middleware('auth');
    Route::get('/acercade', [studentController::class, 'acercade'])
    ->name('acercade')
    ->middleware('auth');
    Route::get('/util', [studentController::class, 'util'])
    ->name('util')
    ->middleware('auth');
    Route::get('/estadisticas', [studentController::class, 'estadisticas'])
    ->name('estadisticas')
    ->middleware('auth');
    Route::get('/clase', [studentController::class, 'clase'])
    ->name('clase')
    ->middleware('auth');
    // esta ruta es para la clase es decir la  informacion de la clase
    Route::get('/clase2', [studentController::class,'clase2'])
    ->name('clase2')
    ->middleware('auth');
})->middleware('auth');
