<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function register(Request $req){
        $user = new User;
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->save();
        $req->session()->put('user', $req->input('name'));
        return view('home');
    }
    public function login(Request $req){
        $user = User::where('email', $req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password')){
            $req->session()->put('user', $user[0]->name);
            return view('home');
        }
    }

    public function home(){
        return view('home');
    }
}
