<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Login');
    }
    // this method will authenticate users
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator -> passes()){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                // this method  will check admin or user
                if(Auth::user()->role!='user'){
                    Auth::logout();
                    notify()->error('you are not authorized to access this page.');
                    return redirect()->route('account.login');   //)->with('error','you are not authorized to access this page.');
                }
                return redirect()->route('account.home');

            }else{
                notify()->error('either email or password is incorrect');
                return redirect()->route('account.login');   //->with('error','either email or password is incorrect');
            }

        }else{
            return redirect()->route('account.login')->withInput()->withErrors($validator);
        }
    }
    //this method will show register page for customer
    public function register(){
        return view('register');
    }
    public function processRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5',
            'password_confirmation' => 'required'
        ]);

        if ($validator->passes()) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'user';
            $user->save();
            return redirect()->route('account.login')->with('success', 'you have successfully register');
        } else {
            return redirect()->route('account.register')->withInput()->withErrors($validator);
        }
    }
    public function logout(){
        Auth::logout();
        // dd('kkk');
        return redirect()->route('account.login');
    }

}
