<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\CompanyCRUDController;


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

Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'store']);

Route::get('/users/update/{id}', [UserController::class, 'edit']);
Route::post('/users/update/{id}', [UserController::class, 'update']);

Route::get('/users/delete/{id}', [UserController::class, 'delete']);

Route::get('/users', [UserController::class, 'index']);



Route::resource('companies', CompanyCRUDController::class);