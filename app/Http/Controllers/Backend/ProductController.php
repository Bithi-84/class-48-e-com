<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productCreate()
    {

        $categories = Category::get();
        $subCategories = SubCategory::get();
        return view ('backend.product.create',compact('categories','subCategories'));
    }
}
