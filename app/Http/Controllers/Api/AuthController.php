<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegister;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(StoreRegister $request)
    {
        $validatedData = $request->validated();

        $user = User::create([
             'name' => $validatedData['name'],
             'category_id' => $validatedData['category_id'],
             'email' => $validatedData['email'],
             'instagram' => $validatedData['instagram'],
             'facebook' => $validatedData['facebook'],
             'youtube' => $validatedData['youtube'],
             'twitter' => $validatedData['twitter'],
             'password' => bcrypt($validatedData['password']), 
         ]);
         $token = $user->createToken('authToken')->plainTextToken;

         return response()->json([
            'status' => 200,
            'message' => 'User register success',
            'data' => $user,
            'token' => $token

        ]);
            
    }


    public function login(StoreLoginRequest $request)
    {
        $credentials = $request->validated();
    
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status' => 401,
                'message' => trans('api.login_error'),
                'data' => []
            ]);
        }
    
        $user = Auth::user();
    
        $token = $user->createToken('authToken')->plainTextToken;
    
        $userData = new UserResource($user);
    
        return response()->json([
            'status' => 200,
            'message' => 'User Login success',
            'data' => [
                'user' => $userData,
                'token' => $token
            ]
        ]);
    }
    

    public function logout(Request $request)
    {
        $user = $request->user();
    
        if ($user) {
            $user->currentAccessToken()->delete();
            return response()->json([
                'status' => 200,
                'message' => 'User Logout success',
            ]);
        }
    
        return response()->json([
            'status' => 400,
            'message' => 'User already logged out or not authenticated',
        ]);
    }
    
}
