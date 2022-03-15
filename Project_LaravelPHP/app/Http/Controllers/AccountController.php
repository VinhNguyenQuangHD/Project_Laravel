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
        
        //echo'Register';
        $req -> validate([
            'username' => 'required',
            'email' => 'required|email|unique:accounts',
            'password' => 'required|min:6|max:20',
        ]);
        
        $acc = new Account();
        $acc -> username = $req -> username;
        $acc -> email = $req -> email;
        $acc -> password = $req -> password;
        
        $res = $acc->save();
        if($res ){
            return back() ->with('success', 'Registing progress is done !!');
        }else{
            return back() ->with('fail', 'Registing progress have error !!');
        }

    }

    public function login_function(Request $request){
        echo("Login");
        /*$request -> validate([
            'username' => 'required',
            'password' => 'required',
        ]);*/
        
    }

}
