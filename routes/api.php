<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Http\Controllers\API\ProductController;
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
Route::get('/products',[ProductController::class,'index']);
Route::get('/products/show/{id}',[ProductController::class,'show']);
Route::get('/products/search/{name}',[ProductController::class,'search']);

//private

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::post('/products/store',[ProductController::class,'store']);
    Route::post('/products/update',[ProductController::class,'update']);
    Route::delete('/products/destroy/{id}',[ProductController::class,'destroy']);

    Route::post('/logout',[AuthController::class,'logout']);
});
   
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});