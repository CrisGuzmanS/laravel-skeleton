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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return [
        'Rogelio',
        'Armando',
        'Carlos'
    ];
});

Route::post('/users', App\Http\Controllers\Users\Register::class)->name('users.register');

Route::post('login', function (Request $request) {

    if (!$request->email) {
        abort(403);
    }

    if (!User::whereEmail($request->email)->exists()) {
        abort(403);
    }
    
    return "abcd1234";
});
