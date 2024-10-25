<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\{
    LoginRequest
};

class AuthController extends Controller
{
    public function login(LoginRequest $request) {
        if (!Auth::attempt($request->all())) {
            return response()->json([
                'message' => 'invalid credentials'
            ], 401);
        }

        $user = Auth::user();

        $tokenResult = $user->createToken('api-token');

        $tokenResult->accessToken->expires_at = now()->addMinutes(5);
        $tokenResult->accessToken->save();

        $token = $tokenResult->plainTextToken;

        return response()->json([
            'token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        if ($user) {
            // delete all sessions
            // $user->tokens()->delete();

            $request->user()->currentAccessToken()->delete();
        }

        return response()->json(['message' => 'Logout successful'], 200);
    }
}
