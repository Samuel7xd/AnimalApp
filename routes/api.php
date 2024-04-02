<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RecintoController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\RecintoAnimalController;
use App\Http\Controllers\CuidadorAnimalController;
use App\Http\Controllers\EspecieAnimalController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('/Animal', AnimalController::class);
Route::resource('/Especie', EspecieController::class);
Route::resource('/Recinto', RecintoController::class);
Route::resource('/Cuidador', CuidadorController::class);
Route::resource('/Actividad', ActividadController::class);
Route::resource('/RecintoAnimal', RecintoAnimalController::class);
Route::resource('/CuidadorAnimal', CuidadorAnimalController::class);
Route::resource('/EspecieAnimal', EspecieAnimalController::class);
