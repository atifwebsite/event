<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        $input = $request->input();
        $users = new User();
        $users -> name =$input['name'];
        $users->email = $input['email'];
        $users->password = $input['password'];
        $users->roll = $input['roll'.['user'.'admin']]->default('user');

        $users->save();


        return redirect()->route('event.home')->with('error', 'Login successfully...');


    }
    // public function index(){
    //     return view('register');
    // }
    // public function login(){
    //     return view('login');
    // }
}
