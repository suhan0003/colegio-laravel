<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->authService->login($credentials)) {

            //$accessToken = auth()->user()->createToken('API Token')->accessToken;
            $accessToken = auth()->user()->createToken('API Token')->plainTextToken;

            return response()->json(['access_token' => $accessToken], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function logout()
    {
        $user = Auth::user();

        if ($user) {

            $this->authService->logout();

            $user->tokens()->delete();

            return response()->json(['message' => 'Sesión cerrada'], 200);
        }

    }

    
}
