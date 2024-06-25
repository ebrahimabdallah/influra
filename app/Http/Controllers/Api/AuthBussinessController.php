<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterBusiness;
use App\Http\Requests\RegisterBussiness;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Resources\BussinessOwenrResource;
use App\Models\BussinessOwenr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthBussinessController extends Controller
{
    public function register(RegisterBussiness $request)
    {
        $validatedData = $request->validated();

        $user = BussinessOwenr::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'category_id' => $validatedData['category_id'],

            'password' => bcrypt($validatedData['password']),

        ]);
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'status' => 200,
            'message' => trans('api.register_success'),
            'data' => $user,
            'token' => $token

        ]);
    }
 
    public function login(LoginRequest $request)
{
    $credentials = $request->validated();

    if (!Auth::guard('business_owners')->attempt($credentials)) {
        return response()->json([
            'status' => 401,
            'message' => trans('api.login_failed')
        ], 401);
    }

    $user = Auth::guard('business_owners')->user();

     $token = $user->createToken('authToken')->plainTextToken;

    $userData = [
        'name' => $user->name,
        'email' => $user->email,
    ];

    return response()->json([
        'status' => 200,
        'message' => trans('api.login_success'),
        'data' => [
            'user' => $userData,
            'token' => $token,
        ]
    ]);
}
    
    

    public function logout(Request $request)
    {
        auth()->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 200,
            'message' => 'User Logout success',
          
        ]);
    }
}
