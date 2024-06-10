<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\AuthBussinessController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\Api\InfluenceUserController;
use App\Http\Controllers\Api\ProfileController;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->group(function () {  
    

    Route::post('logout',[AuthController::class, 'logout']);
    Route::post('logout',[AuthBussinessController::class, 'logout']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/update', [ProfileController::class, 'update']);
});

Route::post('login',[AuthController::class, 'login']);
Route::post('register',[AuthController::class, 'register']);

Route::post('login_bussiness',[AuthBussinessController::class, 'login']);
Route::post('register_bussiness',[AuthBussinessController::class, 'register']);


Route::get('influence',[InfluenceUserController::class, 'influence']);  
Route::get('business',[BusinessController::class, 'index']);  
Route::get('about',[AboutController::class, 'about']);  

Route::get('categoryBusiness',[BusinessController::class, 'categoryBusiness']);  
Route::post('rating',[InfluenceUserController::class, 'rating']);  

Route::get('getPrivcy',[AboutController::class, 'getPrivcy']);  



