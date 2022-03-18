<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Http\Controllers\ProductsController;
use App\Models\User;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('photos',[PhotoController::class,'index']);
// Route::post('photos',[PhotoController::class,'store']);

//Auth

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);


//public
Route::get('/products',[ProductsController::class,'index']);
Route::get('/products/show/{id}',[ProductsController::class,'show']);
Route::get('/products/search/{name}',[ProductsController::class,'search']);

//private

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::post('/products/store',[ProductsController::class,'store']);
    Route::post('/products/update',[ProductsController::class,'update']);
    Route::delete('/products/{id}',[ProductsController::class,'delete']);

    Route::post('/logout',[AuthController::class,'logout']);
});
   
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});