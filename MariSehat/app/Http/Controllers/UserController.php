<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function registerData(Request $req){
        $user = new User;
        $user->username = $req->input('username');
        $user->role = 'customer';
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->save();
        $req->session()->put('user', $req->input('username'));

        return redirect()->back();
    }
    public function register(){
        return view('register');
    }



    public function loginData(Request $req){
        $user = User::where('username', $req->input('username'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password')){
            $req->session()->put('user', $user[0]->name);
            return view('home');
        }
    }

    public function login(){
        return view('login');
    }
   
    public function home(){
        return view('home');
    }
}
