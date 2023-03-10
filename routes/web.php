<?php

use Illuminate\Support\Facades\Route;
// CONTROLADORES
use App\Http\Controllers\carrerasdash;
use App\Http\Controllers\apli\aplicontroller;
use App\Http\Controllers\apli\studentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
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

// Rutas para aplicacion de prueba

Route::get('/index', [aplicontroller::class, 'index'])->name('apli')->middleware('auth');
Route::get('/login', [aplicontroller::class, 'login'])->name('login');
Route::get('/register', [aplicontroller::class, 'register'])->name('register');


Route::post('/create', [aplicontroller::class, 'create'])->name('create');
Route::post('/iniciar', [aplicontroller::class, 'iniciar'])->name('iniciar');
Route::get('/logout', [aplicontroller::class, 'logout'])->name('logout');

// rutas para seleccionar universidad
Route::get('/selectuni',[studentController::class, 'selectuni'])->name('selectuni')->middleware('auth');
Route::post('/selectuni',[studentController::class, 'selectuniv'])->name('selectuniv')->middleware('auth');

// rutas para seleccionar carrera
Route::get('/selectcarrera',[studentController::class, 'selectcarrera'])->name('selectcarrera')->middleware('auth');
Route::post('/selectcarrera',[studentController::class, 'selectcarrer'])->name('selectcarrer')->middleware('auth');

// rutas para seleccionar clases aprobadas
Route::get('/selectclases',[studentController::class, 'selectclases'])->name('selectclases')->middleware('auth');
Route::post('/selectclases',[studentController::class, 'checkclase'])->name('checkclase')->middleware('auth');


// rutas home de estudiante
Route::get('/homeestudiante',[studentController::class, 'homeestudiante'])->name('home')->middleware('auth');
