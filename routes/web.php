<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Auth::routes();

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);




//for Todo Route
Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/todo1', [App\Http\Controllers\TodoController::class, 'showUser']);

Route::get('/todo1',[App\Http\Controllers\TodoController::class, 'index']);

Route::post('/todo1',[App\Http\Controllers\TodoController::class, 'store']);

Route::get('/todo1/{users}/create',[App\Http\Controllers\TodoController::class, 'create']);

Route::post('/todo1/submit',[App\Http\Controllers\TodoController::class, 'save']);

Route::get('/todo1/{todo}/edit',[App\Http\Controllers\TodoController::class, 'edit']);

Route::get('/todo1/{id}/show',[App\Http\Controllers\TodoController::class, 'show']);

Route::post('todo1',[App\Http\Controllers\TodoController::class, 'update']);

Route::delete('/todo1/{todo}',[App\Http\Controllers\TodoController::class, 'destroy']);



