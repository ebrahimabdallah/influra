<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $category=Category::get();
       return view('admin.category',compact('category'));
    }
    public function categoryPage()
    {
       return view('admin.categoryPage');
    }

    public function categoryCreate (Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName; 
        }

        $create = Category::create($validatedData);

    
         return redirect('category')->with('success', 'Operation successful');
    }
}
