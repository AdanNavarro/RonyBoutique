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

// Route::get('/', function () {
//     return view('welcome');
// });

//Vista publica
Route::view('/', 'public/inicio');
Route::view('/sobre-nosotros', 'public/nosotros');
Route::view('/contacto', 'public/contacto');
Route::view('/catalogo', 'public/catalogo');













//Rutas de prueba
Route::view('/prueba','public/nosotros');
Route::view('/producto','public/producto');