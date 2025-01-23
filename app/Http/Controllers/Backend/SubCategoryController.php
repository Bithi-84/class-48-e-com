<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCartegory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
   public function subCategoryList()
    {   
        $subCategories = SubCartegory::with('category')->get();
    

        return view ('backend.sub-category.list',compact('subCategories'));
    }

    public function subCategoryCreate()
    {
        $categories = category::orderBy('name','asc')->get();

        return view('backend.sub-category.create',compact('categories'));
    }

    public function subCategoryStore(Request $request)

    {
        $subCategory = new SubCartegory();
        $subCategory->cat_id = $request->cat_id;
        $subCategory->name = $request->name;
        $subCategory->slug = str::slug($request->name);

        $subCategory->save();
        return redirect()->back();

    }
}
