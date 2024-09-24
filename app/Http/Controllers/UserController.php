<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function login_user(Request $request){
        $form=$request->validate([
            "name"=>"required|max:50",
            "password"=>"required|min:3"
        ]);

        Auth::attempt($form);
        if(Auth::check()){
            return response("login successful");
        }else{
            return response("login failed");
        }
    }

    public function register_user(Request $request){
        $form=$request->validate([
            'name'=>['required',Rule::unique('users','name')],
            "password"=>"required|min:3|confirmed"
        ]);

        $user=User::create($form);
        if($user){
            return redirect("/login")->with("successful","register successful");
        }

        return back()->withErrors("message","login failed");
    }
}
