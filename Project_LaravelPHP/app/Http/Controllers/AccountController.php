<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;


use function GuzzleHttp\Promise\all;

class AccountController extends Controller
{
    public function account(){
        return view("login_register");
    }

    public function mainpage(){
        
    }

    public function registerUser(Request $req){
        
        $req -> validate([
            'username' => 'required',
            'email' => 'required|email|unique:accounts',
            'password' => 'required|min:6|max:20',
        ]);
        $acc = new Account();
        $acc -> username = $req -> username;
        $acc -> email = $req -> email;
        $acc -> password = $req -> password;
        
        $acc->save();
        return redirect('main_page');

    }

    public function login_function(Request $request){
        $request -> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        

        
    }

}
