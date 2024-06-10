<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index(){

        $categorey=Category::all();
        return response()->json([
            'status' => 200,
            'message' => trans('Business List'),
            'data' => [
                'categoerey' => $categorey,
             ]
        ]);
    }

    public function categoryBusiness()
    {
        $categories = Category::with('users')->get();  
    
        return response()->json([
            'status' => 200,
            'message' => trans('Business List'),
            'data' => [
                'categories' => $categories,
             ]
        ]);
    }
}
