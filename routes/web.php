<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas para el administrador
Route::get('/admin', function () {
    return view(view: 'admin.index');
});

// Rutas para el administrador - clientes
//Route::get('/admin/clientes', [App\Http\Controllers\ClienteController::class, 'index']);
//Route::get('/admin/clientes/create', [App\Http\Controllers\ClienteController::class, 'create']);

Route::resource('/admin/clientes', ClienteController::class);