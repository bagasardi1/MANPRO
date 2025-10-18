<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::guard('admin')->attempt($credentials)) {
            return response()->json(['message' => 'Email atau password salah'], 401);
        }

        $admin = Auth::guard('admin')->user();
        $token = $admin->createToken('admin-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'admin' => $admin
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logout berhasil']);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
