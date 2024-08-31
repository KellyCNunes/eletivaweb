<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exerc1',[ListaController::class,'mostrarExerc1']);
Route::post('/respostaexerc1',[ListaController::class,'calcularExerc1']);

Route::get('/exerc2',[ListaController::class,'mostrarExerc2']);
Route::post('/respostaexerc2',[ListaController::class,'calcularExerc2']);

Route::get('/exerc3',[ListaController::class,'mostrarExerc3']);
Route::post('/respostaexerc3',[ListaController::class,'calcularExerc3']);

Route::get('/exerc4',[ListaController::class,'mostrarExerc4']);
Route::post('/respostaexerc4',[ListaController::class,'calcularExerc4']);