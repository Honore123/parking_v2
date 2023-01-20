<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    public function login(Request $request){
        $fields = $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
        $user = Driver::where('phone_number', $fields['phone'])->first();
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Wrong credentials'
            ], 401);
        }
        $token = $user->createToken('parkingToken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return $response;
    }

    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
