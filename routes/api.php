<?php

use App\Http\Controllers\goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productscontroller;

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
// Route::get('/goods', [goods::class, 'index']);
// Route::prefix('good')->group(function(){
//     Route::post('/store', [goods::class, 'store']);
//     Route::put('update/{id}', [goods::class, 'update']);
//     Route::delete('/delete/{id}', [goods::class, 'destroy']);
// });
Route::group(['middleware' =>'auth:sanctum'],function () {
    Route::prefix('products')->group(function(){
        Route::get('/show', [productscontroller::class, 'index']);
        Route::post('/create', [productscontroller::class, 'store']);
        Route::get('/show/{id}', [productscontroller::class, 'show']);
        Route::put('/update/{id}', [productscontroller::class, 'update']);
        Route::delete('/delete/{id}', [productscontroller::class, 'destroy']);
    });
});


