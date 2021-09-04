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

Route::middleware(['auth'])->group(function () {
	Route::get('/dashboard', [App\Http\Controllers\ContractController::class, 'dashboard'])->name('dashboard'); // Listar todos los Contracts.
	Route::post('/contracts', [App\Http\Controllers\ContractController::class, 'store']); // Procesar request para guardar en bd.
	Route::get('/contracts/{contract}', [App\Http\Controllers\ContractController::class, 'show']); // Ver detalle de cada Contract (rates)
});

require __DIR__.'/auth.php';
