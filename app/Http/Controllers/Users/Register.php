<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        $accesToken = $user->createToken('authToken')->accessToken;

        return response([
            'user' => $user,
            'acces_token' => $accesToken
        ]);
    }
}
