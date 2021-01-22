<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/home','home');
Route::get('/home',[RestoController::class,'index']);
Route::get('/list',[RestoController::class,'list']);
Route::view('add','add');
Route::post('/add',[RestoController::class,'add']);
Route::get('/delete/{id}',[RestoController::class,'delete']);
Route::get('/edit/{id}',[RestoController::class,'edit']);
Route::post('/edit/{id}',[RestoController::class,'update']);
Route::get('register',[RegisterController::class,'index']);
Route::post('register',[RegisterController::class,'register']);

Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'auth']);




