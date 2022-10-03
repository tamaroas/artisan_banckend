<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\artisan;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email', 'password'))){
            return response([
                'messege' => 'invalid credentials!'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $artisan = Auth::artisan();

        $token = $artisan->createToken('auth-token')->plainTextToken;
        $cookie = cookie('jwt', $token, 60*24);

        return response([
            'message' => "Login success",
            'token' => $token,
            'artisan' => $artisan->email
        ])->withCookie($cookie);
    }
}