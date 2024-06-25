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
    

    Route::post('logout/user',[AuthController::class, 'logout']);
    Route::post('logout/bussiness',[AuthBussinessController::class, 'logout']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/update/{id}', [ProfileController::class, 'update']);
});



 
Route::post('login',[AuthController::class, 'login']);
Route::post('register',[AuthController::class, 'register']);

Route::post('login_bussiness',[AuthBussinessController::class, 'login']);
Route::post('register_bussiness',[AuthBussinessController::class, 'register']);

Route::post('rating',[InfluenceUserController::class, 'rating']);  
Route::get('influence',[InfluenceUserController::class, 'index']);  
Route::get('influence/profile/{id}',[InfluenceUserController::class, 'profile']);  


Route::get('business',[BusinessController::class, 'index']);  
Route::get('about',[AboutController::class, 'about']);  

Route::get('categoryBusiness',[BusinessController::class, 'categoryBusiness']);  

Route::get('getPrivcy',[AboutController::class, 'getPrivcy']);  



