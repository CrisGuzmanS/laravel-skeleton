<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        if (!$request->email) {
            abort(403);
        }

        if (!User::whereEmail($request->email)->exists()) {
            abort(403);
        }

        $attemp = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$attemp){
            return response([
                'message' => 'invalid credentials'
            ]);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response([
            'user' => auth()->user(),
            'access_token' => $accessToken
        ]);
    }
}
