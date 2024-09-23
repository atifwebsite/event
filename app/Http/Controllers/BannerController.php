<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banner');
    }

    public function create(Request $request)
    {
        $banners = new Banner();
        $banners->title = $request->input('title');
        $banners->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imagename = "images/" . time() . '.' . $ext;
            // dd($image, $ext, $imagename, $banners);
            $image->move(public_path('images'), $imagename);
            $banners->image = $imagename;
        }

        $res = $banners->save();
        if($res){
            notify()->success('Banner created successfully!');
        }else{
            notify()->error('Banner is not  created..!');
        }
        return redirect()->route('admin.banner-list')->with('success', 'Banner created successfully!');
    }

    public function list(Request $request)
{
    // Check if there is a search query
    if ($request->has('search')) {
        // Search for categories by name using LIKE and paginate the results
        $banners = Banner::where('title', 'LIKE', '%' . $request->search . '%')->paginate(3);
    } else {
        // If no search query, retrieve all categories and paginate
        $banners = Banner::paginate(3);
    }

    // Return the view with the banners
    return view('admin.banner-list')->with('banners', $banners);
}


    public function edit($id)
    {
        $banners = Banner::findOrFail($id);
        return view('admin.banner-edit')->with('banner', $banners);
    }

    public function update($id, Request $request)
    {
        $banners = Banner::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image
            File::delete(public_path('images/' . $banners->image));
            // Store new image
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; // Unique image name
            $image->move(public_path('images'), $imageName);
            // Save image name in database
            $banners->image = $imageName;
        }

        $banners->title = $request->input('title');
        $banners->description = $request->input('description');
         $res = $banners->save();
         if($res)
         {
            notify()->success('Banner updated successfully!');
         }else{
            notify()->error('Something wrong..!');
         }


        return redirect()->route('admin.banner-list');
    }
    public function delete($id)
    {
        $banners = Banner::findOrFail($id);
        if ($banners->image) {
            // Delete old image
            File::delete(public_path('images/' . $banners->image));
        }
        $res = $banners->delete();
        if($res){
            notify()->success('Banner deleted successfully!');
        }else{
            notify()->error('Banner is not deleted');
        }

        return redirect()->route('admin.banner-list');
    }

    public function status_active_deactive(Request $request)
    {
        $Ids = $request->id;
        $result = Banner::find($Ids);

        if ($result->status == 1) {
            $update_arr = [
                'status' => 0
            ];
            $response = Banner::where('id', $request->id)->update($update_arr);
            return true;
        }
        if ($result->status == 0) {
            $update_arr = [
                'status' => 1
            ];
            $response = Banner::where('id', $request->id)->update($update_arr);
            return true;
        }
    }
}
