<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getdata($id)
    {
        $category = Category::find($id);
        if ($category) {
            return response()->json($category);
        } else {
            return response()->json(['message', 'Data is not found'], 404);
        }
        // return Category::all();
    }
    public function bannerdata($id)
    {
        $banner = Banner::find($id);

        if ($banner) {
            return response()->json($banner);
        } else {
            return response()->json(['message' => 'Data not found'], 404);
        }
    }
}

