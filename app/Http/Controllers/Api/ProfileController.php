<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
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

    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();
    
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
                 return $this->helper->error(400, trans('api.file_upload_error'));
            }
        } else {
            $data['image'] = $user->image;
        }
    
        if ($user->update($data)) {

            $data=([
            'status' => 200,
            'message' => trans('influencer List'),
            'data' => [
                'profile_user' => $userProfile,
            ]
        ]);
    
    }
    
        return $this->helper->error(200, trans('api.error'));
    }
}    
    
 