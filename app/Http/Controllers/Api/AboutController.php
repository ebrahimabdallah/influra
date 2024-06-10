<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Privacy;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $about=About::get();
        return response()->json([
            'status' => 200,
            'message' => trans('About List'),
            'data' => [
                'about' => $about,
             ]
        ]);
    }
    

    public function getPrivcy()
    {
        $Privacy=Privacy::get();
        return response()->json([
            'status' => 200,
            'message' => trans('Privacy List'),
            'data' => [
                'Privacy' => $Privacy,
             ]
        ]);
    }
    
}
