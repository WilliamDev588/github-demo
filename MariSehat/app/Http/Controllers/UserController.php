<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function registerData(Request $request){
        $rules = [
            'username' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $user = new User;
        $user->username = $request->input('username');
        $user->role = 'customer';
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect()->back();
    }
    public function register(){
        return view('register');
    }

    public function loginData(Request $request){
        $email = $request->email;
        $password = $request->password;
        $rememberMe = $request->rememberMe;

        $isvalid = auth()->attempt(['email' => $email,
            'password' => $password]);

        if($isvalid){
            if($rememberMe){
                Cookie::queue('email', $email, 60);
                Cookie::queue('password', $password, 60);
            }
            return redirect('home');
        }else{
            return back()->withErrors(new MessageBag(['Invalid email or password']));
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }

    public function login(){
        return view('login');
    }

    public function home(){
        return view('home');
    }
}
