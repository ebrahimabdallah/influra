<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    protected $helper;

    public function __construct(Helper $helper)
    {
        $this->helper = $helper;
    }
    public function index()
    {
        $userProfile = User::findOrFail(Auth::user()->id);  
        return response()->json([
            'status' => 200,
            'message' => trans('influencer List'),
            'data' => [
                'profile_user' => $userProfile,
            ]
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
    
        // Ensure the authenticated user matches the ID being updated
        if ($user->id != $id) {
            return response()->json([
                'status' => 403,
                'message' => trans('unauthorized'),
            ]);
        }
    
        $data = [
            'name' => $request->input('name', $user->name),
            'password' => $request->filled('password') ? bcrypt($request->password) : $user->password,
            'email' => $request->input('email', $user->email),
        ];
    
        if ($request->hasFile('image')) {
            $profilePicturePath = Helper::fileUploader($request->file('image'), 'images');
    
            if ($profilePicturePath) {
                Helper::deleteFile($user->image);
                $data['image'] = $profilePicturePath;
            } else {
                return response()->json([
                    'status' => 400,
                    'message' => trans('file upload error'),
                ]);
            }
        }
    
        if ($user->update($data)) {
            return response()->json([
                'status' => 200,
                'message' => trans('informations update success'),
                'data' => [
                    'profile_user' => new UserResource($user),  
                ],
            ]);
        }
    
        return response()->json([
            'status' => 400,
            'message' => trans('update error'),
        ]);
    }
    
}    
    
 