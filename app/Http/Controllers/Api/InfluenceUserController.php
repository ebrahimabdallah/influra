<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InfluenceUserResource;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;

class InfluenceUserController extends Controller
{
    public function influnce()
    {
        $allinflunce=User::all();
        $userData = InfluenceUserResource::collection($allinflunce);
        return response()->json([
            'status' => 200,
            'message' => trans('influncerd List'),
            'data' => [
                'influncer' => $userData,
             ]
        ]);
    }

    public function rating(Request $request)
    {
         
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
             'rating' => 'required|integer|min:1|max:5',
            
        ]);
    
       
        $rating = Rating::create([
            'user_id' => $validatedData['user_id'],
             'rating' => $validatedData['rating'],
             
        ]);
    
        return response()->json([
            'status' => 200,
            'message' => 'Rating submitted successfully.',
            'data' => $rating,
        ]);
    }
    
}
