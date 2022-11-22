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

//Vista privada
Route::view('/tablero', 'private/dashboard')->name("tablero.dashboard");
Route::view('/tablero/usuarios', 'private/usuarios')->name("tablero.usuarios");
Route::view('/tablero/boutique', 'private/boutique')->name("tablero.boutique");
Route::view('/tablero/ventas', 'private/sales')->name("tablero.sales");




//Rutas de prueba
// Route::view('/prueba','template/dashboard/layout');
// Route::view('/prueba2','private/dashboard');
// Route::view('/prueba3','private/usuarios');
// Route::view('/prueba4','private/boutique');
// Route::view('/prueba5','private/sales');
// Route::view('/producto','public/producto');