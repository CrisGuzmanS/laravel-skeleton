<?php

use App\Models\User;
use Illuminate\Http\Request;
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



Route::middleware('auth:api')->get('/users', App\Http\Controllers\Users\Index::class)->name('users.index');

Route::post('/register', App\Http\Controllers\Users\Register::class)->name('users.register');
Route::post('/login', App\Http\Controllers\Users\LoginController::class)->name('users.login');
