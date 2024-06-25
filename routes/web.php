<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GeneralController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[GeneralController::class, 'home']);

Route::get('index/about',[GeneralController::class, 'about']);
Route::get('about',[GeneralController::class, 'pageCreate']);
Route::post('about',[GeneralController::class, 'createAbout']);


Route::get('influncer',[GeneralController::class, 'influncer']);
Route::get('privacy',[GeneralController::class, 'privacy']);

Route::get('create/privacy',[GeneralController::class, 'privacyPage']);
Route::post('create/privacy',[GeneralController::class, 'createprivacy']);




Route::get('ownerBussiness',[GeneralController::class, 'ownerBussiness']);

Route::get('admins',[GeneralController::class, 'admins']);

Route::get('category',[CategoryController::class, 'category']);
Route::get('categoryCreate',[CategoryController::class, 'categoryPage']);
Route::post('categoryCreate',[CategoryController::class, 'categoryCreate']);

Route::get('logout',[CategoryController::class, 'logout']);

