<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function login(){
        return view ('auth.login_page');
    }

    public function register(){
        return view ('auth.register_page');
    }

    public function register_controller(Request $req){
        $req -> validate([
            'username' => 'required',
            'email' => 'required|email|unique:accounts',
            'username' => 'required|min:6|max:12',
        ]);
        $acc = new Account();
        $acc -> username = $req -> username;
        $acc -> email = $req -> email;
        $acc -> password =Hash::make($req -> password) ;
        $res = $acc->save();
        if($res){
            return back()-> with('success','Error');
        }else{
            return back()-> with('fail','Error');
        }

    }
}
