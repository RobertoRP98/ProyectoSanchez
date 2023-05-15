<?php

use Illuminate\Support\Facades\Route;

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


Route::resource('autosInformacions', App\Http\Controllers\autos_informacionController::class);


Route::resource('cronogramas', App\Http\Controllers\cronogramaController::class);


Route::resource('ejecucions', App\Http\Controllers\ejecucionController::class);


Route::resource('empleadosOcupados', App\Http\Controllers\empleados_ocupadosController::class);


Route::resource('historicoCronogramas', App\Http\Controllers\historico_cronogramaController::class);


Route::resource('historicoAutoInfos', App\Http\Controllers\historico_auto_infoController::class);
