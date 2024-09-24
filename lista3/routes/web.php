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

Route::get('/exerc5',[ListaController::class,'mostrarExerc5']);
Route::post('/respostaexerc5',[ListaController::class,'calcularExerc5']);

Route::get('/exerc6',[ListaController::class,'mostrarExerc6']);
Route::post('/respostaexerc6',[ListaController::class,'calcularExerc6']);

Route::get('/exerc7',[ListaController::class,'mostrarExerc7']);
Route::post('/respostaexerc7',[ListaController::class,'calcularExerc7']);

Route::get('/exerc8',[ListaController::class,'mostrarExerc8']);
Route::post('/respostaexerc8',[ListaController::class,'calcularExerc8']);

Route::get('/exerc9',[ListaController::class,'mostrarExerc9']);
Route::post('/respostaexerc9',[ListaController::class,'calcularExerc9']);

Route::get('/exerc10',[ListaController::class,'mostrarExerc10']);
Route::post('/respostaexerc10',[ListaController::class,'calcularExerc10']);

Route::get('/exerc11',[ListaController::class,'mostrarExerc11']);
Route::post('/respostaexerc11',[ListaController::class,'calcularExerc11']);

Route::get('/exerc12',[ListaController::class,'mostrarExerc12']);
Route::post('/respostaexerc12',[ListaController::class,'calcularExerc12']);

Route::get('/exerc13',[ListaController::class,'mostrarExerc13']);
Route::post('/respostaexerc13',[ListaController::class,'calcularExerc13']);

Route::get('/exerc14',[ListaController::class,'mostrarExerc14']);
Route::post('/respostaexerc14',[ListaController::class,'calcularExerc14']);

Route::get('/exerc15',[ListaController::class,'mostrarExerc15']);
Route::post('/respostaexerc15',[ListaController::class,'calcularExerc15']);

Route::get('/exerc16',[ListaController::class,'mostrarExerc16']);
Route::post('/respostaexerc16',[ListaController::class,'calcularExerc16']);

Route::get('/exerc17',[ListaController::class,'mostrarExerc17']);
Route::post('/respostaexerc17',[ListaController::class,'calcularExerc17']);

Route::get('/exerc18',[ListaController::class,'mostrarExerc18']);
Route::post('/respostaexerc18',[ListaController::class,'calcularExerc18']);

Route::get('/exerc19',[ListaController::class,'mostrarExerc19']);
Route::post('/respostaexerc19',[ListaController::class,'calcularExerc19']);

Route::get('/exerc20',[ListaController::class,'mostrarExerc20']);
Route::post('/respostaexerc20',[ListaController::class,'calcularExerc20']);
