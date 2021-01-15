<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $user = User::where([
            'name' => $request->name,

            'password' => $request->password,
        ])->first();

        $token = auth()->login($user);

        return $this->respondWithToken($token);

    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
         auth()->logout();
         return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * @param $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
         return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}