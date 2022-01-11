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
            'username' => 'required|regex:/^[\pL\s\-]+$/u|unique:users,username',
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

        return redirect('/login');
    }
    public function register(){
        return view('login.register');
    }

    public function loginData(Request $request){
        $username = $request->username;
        $password = $request->password;
        $rememberMe = $request->rememberMe;

        $isvalid = auth()->attempt(['username' => $username,
            'password' => $password]);

        if($isvalid){
            if($rememberMe){
                Cookie::queue('username', $username, 60);
                Cookie::queue('password', $password, 60);
            }
            if(auth()->user()->role == 'admin')
                return redirect('/admin');
            return redirect('/');
        }else{
            return back()->withErrors(new MessageBag(['Invalid username or password']));
        }
    }

    public function logout(){
        auth()->logout();
        session()->forget('cart');
        return redirect('/login');
    }

    public function login(){
        return view('login.login');
    }

    public function home(){
        return view('user.home');
    }

    public function product(){
        return view('user.product');
    }

    public function productDetail(){
        return view('user.productDetail');
    }

    public function about(){
        return view('user.about');
    }

    public function admin(){
        return view('admin.admin');
    }
}
