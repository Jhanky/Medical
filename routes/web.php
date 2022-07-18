<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\SupervisorController;

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



/*   Rutas del agente */

Route::get('/Agente', function () {
    return view('Agente.principal');
});

Route::get('/Agente/datos', function () {
    return view('Agente.dotosPaciente');
});

Route::get('/Agente/lista', function () {
    return view('Agente.listaDoctores');
});

/*  rutas de doctor  */

Route::get('/Doctor', function () {
    return view('Doctor.principal');
});

Route::get('/Doctor/datos', function () {
    return view('Doctor.datosPaciente');
});

Route::get('/Doctor/history', function () {
    return view('Doctor.history');
});







