<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    //
    public function create(Request $request)
    {
        $input = $request->input();
        $socialmedia = new SocialMedia();
        $socialmedia->facebook = $input['facebook'];
        $socialmedia->instagram = $input['instagram'];
        $socialmedia->twitter = $input['twitter'];
        $socialmedia->save();
        return view('admin.social-media-links');
    }
}
