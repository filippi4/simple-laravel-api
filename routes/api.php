<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('articles', [ArticleController::class, 'index']);
    Route::get('articles/{article}', [ArticleController::class, 'show']);
    Route::post('articles', [ArticleController::class, 'store']);
    Route::put('articles/{article}', [ArticleController::class, 'update']);
    Route::delete('articles/{article}', [ArticleController::class, 'delete']);
    Route::post('logout', [LoginController::class, 'logout']);
});

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);
