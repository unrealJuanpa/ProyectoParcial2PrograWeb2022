<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\MedicamentoController;
use App\Http\Controllers\Dashboard\MiscController;
use App\Http\Controllers\Dashboard\ListarmedsclienteController;
use App\Http\Controllers\Dashboard\ListarmiscclienteConstroller;
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
}) -> name('home');

Route::resource('medicamento', MedicamentoController::class);
Route::resource('category', CategoriesController::class);
Route::resource('misc', MiscController::class);
Route::resource('listarmedscliente', ListarmedsclienteController::class);
Route::resource('listarmisccliente', ListarmiscclienteConstroller::class);