<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }
    public function manage_info()
    {
        return view('admin.manage-info');
    }
    public function social_links()
    {
        return view('admin.social-media-links');
    }
    public function terms_condition()
    {
        return view('admin.terms-condition');
    }

}
