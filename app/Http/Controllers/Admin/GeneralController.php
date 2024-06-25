<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\BussinessOwenr;
use App\Models\Category;
use App\Models\Privacy;
use App\Models\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    public function home()
    {
        return view('admin.home');
    }
    public function about()
    {
       $about=About::get();
       return view('admin.about',compact('about'));
    }

    public function pageCreate()
    {
        return view('admin.createAbout');
    }


    public function createAbout(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);
    
         $create = About::create($validatedData);
    
         return redirect('about')->with('success', 'Operation successful');
    }
    


    public function privacy()
    {
        $privacy=Privacy::get();
        return view('admin.privacy',compact('privacy'));
    }
    public function privacyPage()
    {
        return view('admin.privacyCreate');
    }


    public function createprivacy(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);
    
         $create = Privacy::create($validatedData);
    
         return redirect('create/privacy')->with('success', 'Operation successful');
    }

    public function influncer()
    {
        $user=User::get();
        return view('admin.influncer',compact('user'));
    }


    public function ownerBussiness()
    {
        $ownerBussiness=BussinessOwenr::get();
        return view('admin.ownerBussiness',compact('ownerBussiness'));
    }


    
   public function logout()
   {

   }

    
}
