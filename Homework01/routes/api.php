<?php


use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;

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
        Route::delete('/delete/{id}',[BookController::class,'delete']);

    
});

Route::prefix('/authors') ->group(function(){
    Route::get('/',[UserController::class,'index']);
    Route::get('/{id}',[UserController::class,'show']);
    Route::post('/create',[UserController::class,'create']);
    Route::put('/update/{id}',[UserController::class,'update']);
    Route::delete('/delete/{id}',[UserController::class,'delete']);

});


Route::prefix('/users') ->group(function(){
    Route::get('/',[UserController::class,'index']);
    Route::get('/{id}',[UserController::class,'show']);
    Route::post('/create',[UserController::class,'create']);
    Route::put('/update/{id}',[UserController::class,'update']);
    Route::delete('/delete/{id}',[UserController::class,'delete']);

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
