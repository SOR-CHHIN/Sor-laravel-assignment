<?php

use App\Http\Controllers\BookController;
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
Route::prefix('/books') ->group(function(){
        Route::get('/',[BookController::class,'index']) ->name('/allBooks');
        Route::get('show/{id}',[BookController::class,'show']);
        Route::post('create/{id}',[BookController::class,'create']);
        Route::put('update/{id}',[BookController::class,'update']);
        Route::delete('/delete/{id}',[BookController::class, 'delete']);

    
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
