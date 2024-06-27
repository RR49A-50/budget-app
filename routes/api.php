<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

route::middleware('auth:api')->group(function(){
    route::get('/outcome',[OutcomeController::class, 'index']);
    route::get('/outcome/{id}',[OutcomeController::class, 'show']);
    route::post('/outcome',[OutcomeController::class, 'store']);
    route::delete('/outcome/{id}',[OutcomeController::class, 'destroy']);

    route::get('/income',[IncomeController::class, 'index']);
    route::get('/income/{id}',[IncomeController::class, 'show']);
    route::post('/income',[IncomeController::class, 'store']);
    route::delete('/income/{id}',[IncomeController::class, 'destroy']);

    route::get('/user',[UserController::class, 'index']);
    route::get('/user/{id}',[UserController::class, 'show']);
    route::post('/user',[UserController::class, 'store']);
    route::delete('/user/{id}',[UserController::class, 'destroy']);
});



route::post('/login',[AuthController::class, 'login']);