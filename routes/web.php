<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ClotheController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get('/', [ClotheController::class, 'inicio'])->name('inicio');
Route::view('/sobre-nosotros', 'public/nosotros')->name('sobre.nosotros');
Route::view('/contacto', 'public/contacto')->name('contacto');
Route::get('/catalogo/{id}', [ClotheController::class, 'viewProducto'])->name('catalogo.producto');
Route::get('/catalogo', [ClotheController::class, 'viewCatalogo'])->name('catalogo.index');
Route::post('/catalogo/filter/categoria', [ClotheController::class, 'filterType'])->name('filterType');
Route::post('/catalogo/filter/marca', [ClotheController::class, 'filterTrademark'])->name('filterTrade');

Route::get('/catalogohombre', [ClotheController::class, 'catalogo_hombre'])->name('catalogo.hombre');
Route::get('/catalogomujer', [ClotheController::class, 'catalogo_mujer'])->name('catalogo.mujer');
Route::get('/catalogonino', [ClotheController::class, 'catalogo_nino'])->name('catalogo.nino');
Route::get('/catalogoaccesorio', [ClotheController::class, 'catalogo_accesorio'])->name('catalogo.accesorio');

//carrito
Route::get('/carrito', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/carrito/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/carrito/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/carrito/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::get('/carrito/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/carrito/confirmacion-compra', [CartController::class, 'confirmSale'])->name('cart.confirm.sale');

//Vista privada
Route::view('/tablero', 'private/dashboard')->name("tablero.dashboard");
Route::get('/tablero/usuarios', [UserController::class, 'index'])->name("tablero.usuarios");
Route::get('/tablero/boutique', [ClotheController::class, 'boutique_index'])->name("tablero.boutique");
Route::view('/tablero/ventas', 'private/sales')->name("tablero.sales");


Route::post('/subirimagen', [ClotheController::class, 'boutique_store'])->name("pruebita");




// Route::get('/carrito', [ProductController::class, 'productList'])->name('products.list');
// Route::get('/carrito/cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('/carrito/cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('/carrito/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('/carrito/remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('/carrito/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/carrito/getcart', [CartController::class, 'getCart']);

//Crear la venta

Route::get('/crearventa', [CartController::class, 'createSale'])->name("cart.create.sale");

/*

1. hacer que elimine stock la api - LISTO

HACER RECONOCIMIENTOS LISTO

2. confirmación de compra con otro archivo LISTo
3. Sobre nosotros
4. crud funcional
5. Login funcional y que el carrito funcione con dicho usuario



*/

//Rutas de prueba
// Route::view('/prueba','template/dashboard/layout');
// Route::view('/prueba2','private/dashboard');
// Route::view('/prueba3','private/usuarios');
// Route::view('/prueba4','private/boutique');
// Route::view('/prueba5','private/sales');
// Route::view('/producto','public/producto');