<?php

namespace App\Http\Controllers;
use App\Http\Requests\MasterRequest;
use App\Models\MasterSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MasterSettingController extends Controller
{
    public function index()
    {
        $details = MasterSetting::first();

        return view('admin.master-setting',[
            'details' => $details
        ]);
    }
    public function create(MasterRequest $request)
    {
        // dd($request->all());
        $master_id =   (int)$request->id;
        //  dd($master_id);
        $master_setting = $request->id ? MasterSetting::find($master_id) : new MasterSetting();

        if($request->id)
        {
        $master_setting->company_title = $request->company_title;
        $master_setting->phone = $request->phone;
        $master_setting->email = $request->email;
        $master_setting->address = $request->address;
        $master_setting->description = $request->description;
        $master_setting->facebook = $request->facebook;
        $master_setting->twitter = $request->twitter;
        $master_setting->instagram = $request->instagram;
        if ($request->hasFile('logo')) {
            File::delete(public_path('logo/' . $master_setting->image));
            $logo = $request->file('logo');
            $ext = $logo->getClientOriginalExtension();
            $logofilename = "logo" . time() . '.' . $ext;
            // dd($image, $ext, $imagename, $banners);
            $logo->move(public_path('logo'), $logofilename);
            $master_setting->logo = $logofilename;
        }
        if ($request->hasFile('fav_icon')) {
            File::delete(public_path('fav_icon/' . $master_setting->fav_icon));
            $fav_icon = $request->file('fav_icon');
            $ext = $fav_icon->getClientOriginalExtension();
            $fav_iconfilename = "fav_icon" . time() . '.' . $ext;
            // dd($image, $ext, $imagename, $banners);
            $fav_icon->move(public_path('fav_icon'), $fav_iconfilename);
            $master_setting->fav_icon = $fav_iconfilename;
        }

        $master_setting->save();
        return redirect()->route('admin.master-setting');

        }else{
            // $master_setting = new MasterSetting();
        $master_setting->company_title = $request->company_title;
        $master_setting->phone = $request->phone;
        $master_setting->email = $request->email;
        $master_setting->address = $request->address;
        $master_setting->description = $request->description;
        $master_setting->facebook = $request->facebook;
        $master_setting->twitter = $request->twitter;
        $master_setting->instagram = $request->instagram;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $ext = $logo->getClientOriginalExtension();
            $logofilename = "logo" . time() . '.' . $ext;
            // dd($image, $ext, $imagename, $banners);
            $logo->move(public_path('logo'), $logofilename);
            $master_setting->logo = $logofilename;
        }
        if ($request->hasFile('fav_icon')) {
            $fav_icon = $request->file('fav_icon');
            $ext = $fav_icon->getClientOriginalExtension();
            $fav_iconfilename = "fav_icon" . time() . '.' . $ext;
            // dd($image, $ext, $imagename, $banners);
            $fav_icon->move(public_path('fav_icon'), $fav_iconfilename);
            $master_setting->fav_icon = $fav_iconfilename;
        }

        $master_setting->save();
        return redirect()->route('admin.master-setting');

        }

    }
}

