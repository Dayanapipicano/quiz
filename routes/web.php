<?php

use App\Http\Controllers\cuerpoEController;
use App\Http\Controllers\servicioController;
use Illuminate\Support\Facades\Route;

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

route::get('servicio/create',[servicioController::class,'create']);
route::post('servicio',[servicioController::class,'store'])->name('store.servicio');


route::get('cuerpo/create',[cuerpoEController::class,'create']);
route::post('cuerpo',[cuerpoEController::class,'store'])->name('store.cuerpo');