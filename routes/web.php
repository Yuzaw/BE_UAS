<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
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

Route::get('/',[WebController::class,'index']);
Route::get('/{id}/detail',[WebController::class,'detail']);
Route::get('/CRUD',[CRUDController::class,'index']);
Route::get('/CRUD/create',[CRUDController::class,'create']);
Route::post('/CRUD',[CRUDController::class,'store']);
Route::get('/CRUD/{id}/edit',[CRUDController::class,'edit']);
Route::put('/CRUD/{id}',[CRUDController::class,'update']);
Route::delete('/CRUD/{id}',[CRUDController::class,'delete']);