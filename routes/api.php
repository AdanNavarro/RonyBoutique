<?php

use App\Http\Controllers\ClotheController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



// ============ ROUTES FROM Clothes ===============

Route::resource('/Clothes',ClotheController::class); //All Collection

Route::post('/Clothes' , [ClotheController::class, 'store']); //Resgistrer Product

Route::get('/Clothes/{id}',[ClotheController::class, 'show']); //Show By Id

Route::put('/Clothes/{id}',[ClotheController::class, 'update']); //Update A Registrer

Route::delete('/Clothes/{id}', [ClotheController::class, 'destroy']); //Delete A Registrer

Route::get('/GetClothes/{nClothes}', [ClotheController::class, 'Get_n']);// Get a number of registrers

Route::get('/Clothe/{Name_P}', [ClotheController::class, 'Search_Name']);// Search for name


// ============ END ROUTES FROM Clothes ===============