<?php

use App\Http\Controllers\Api\authController;
use App\Http\Controllers\Api\categoryController;
use App\Http\Controllers\Api\newProductController;
use App\Http\Controllers\Api\oneProductController;
use App\Http\Controllers\Api\photoController;
use App\Http\Controllers\Api\productController;
use App\Http\Controllers\Api\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(authController::class)->group(function(){
    Route::post('register','register');
    Route::post('login','login');
    Route::post('logout','logout')->middleware('auth:sanctum');
});

Route::get('/products', productController::class);
Route::get('/products/{id}', oneProductController::class);
Route::post('/product', newProductController::class);


Route::get('/users', userController::class);


Route::get('/photos', photoController::class);
Route::get('/photos/{id}', photoController::class);


Route::get('category/{id}', categoryController::class);



