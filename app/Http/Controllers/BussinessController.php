<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterBussiness;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegister;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BussinessController extends Controller
{
    public function register(StoreRegister $request)
    {
        $validatedData = $request->validated();

        $user = User::create([
             'name' => $validatedData['name'],
             'email' => $validatedData['email'],
             'category_id'=> $validatedData['category_id'],
             'password' => bcrypt($validatedData['password']), 
         ]);

         return response()->json([
            'status' => 200,
            'message' => trans('api.register_success'),
            'data' => $user
        ]);
            
    }


    public function login(RegisterBussiness $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status' => 401,
                'message' => trans('api.login_error'),
                'data' => [
                     
                   
                ]
            ]);
            
        }

        $user = $request->user();

        $token = $user->createToken('authToken')->plainTextToken;

        $userData = new UserResource($user);

      return response()->json([
    'status' => 200,
    'message' => trans('api.login_success'),
    'data' => [
        'user' => $userData,
        'token' => $token
    ]
]);


     }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 200,
            'message' => trans('api.logout'),
            
        
        ]);

     }
}
