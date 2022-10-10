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

Route::get('/main', function () {
    return view('contenido/contenido');
});


Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'index']);
Route::post('/categoria/registrar', [App\Http\Controllers\CategoriaController::class, 'store']);
Route::put('/categoria/actualizar', [App\Http\Controllers\CategoriaController::class, 'update']);
Route::put('/categoria/desactivar', [App\Http\Controllers\CategoriaController::class, 'desactivar']);
Route::put('/categoria/activar', [App\Http\Controllers\CategoriaController::class, 'activar']);
Route::get('/categoria/selectCategoria', [App\Http\Controllers\CategoriaController::class, 'selectCategoria']);


Route::get('/articulo', [App\Http\Controllers\ArticuloController::class, 'index']);
Route::post('/articulo/registrar', [App\Http\Controllers\ArticuloController::class, 'store']);
Route::put('/articulo/actualizar', [App\Http\Controllers\ArticuloController::class, 'update']);
Route::put('/articulo/desactivar', [App\Http\Controllers\ArticuloController::class, 'desactivar']);
Route::put('/articulo/activar', [App\Http\Controllers\ArticuloController::class, 'activar']);

Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index']);
Route::post('/cliente/registrar', [App\Http\Controllers\ClienteController::class, 'store']);
Route::put('/cliente/actualizar', [App\Http\Controllers\ClienteController::class, 'update']);

Route::get('/proveedor', [App\Http\Controllers\ProveedorController::class, 'index']);
Route::post('/proveedor/registrar', [App\Http\Controllers\ProveedorController::class, 'store']);
Route::put('/proveedor/actualizar', [App\Http\Controllers\ProveedorController::class, 'update']);

Route::get('/rol', [App\Http\Controllers\RolController::class, 'index']);
Route::get('/rol/selectRol', [App\Http\Controllers\RolController::class, 'selectRol']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::post('/user/registrar', [App\Http\Controllers\UserController::class, 'store']);
Route::put('/user/actualizar', [App\Http\Controllers\UserController::class, 'update']);
Route::put('/user/desactivar', [App\Http\Controllers\UserController::class, 'desactivar']);
Route::put('/user/activar', [App\Http\Controllers\UserController::class, 'activar']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
