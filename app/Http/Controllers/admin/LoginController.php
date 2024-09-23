<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
class LoginController extends Controller
{
    //this method will show login page for admin
    public function index(){
        return view('admin.login');
    }
    // this method will authenticate admin
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator -> passes()){
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
                // this method  will check admin or customer
                if(Auth::guard('admin')->user()->role!='admin'){
                    Auth::guard('admin')->logout();
                    notify()->error('you are not authorized to access this page.');
                    return redirect()->route('admin.login');
                }
                return redirect()->route('admin.dashboard');

            }else{
                notify()->error('either email or password is incorrect');
                return redirect()->route('admin.login');
            }

        }else{
            return redirect()->route('admin.login')->withInput()->withErrors($validator);
        }
    }
    //this method  will logout admin
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
