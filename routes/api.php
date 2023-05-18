<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [UserController::class,"index"])->name('home');
Route::get('/users/{id}', [UserController::class,"show"])->name('show');
Route::post('/users', [UserController::class,"store"])->name('create');
Route::put('users/{id}', [UserController::class,"update"])->name('update');
Route::delete('users/{id}', [UserController::class,"delete"])->name('destroy');
?>