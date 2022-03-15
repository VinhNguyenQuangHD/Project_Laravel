<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function account(){
        return view("login_register");
    }

    public function account_even(Request $request){
        //echo("Value is on !!");
        $request -> validate([
            'username'=> 'required',
            'email'=> 'required|email|unique:accounts',
            'password'=> 'required|min:6|Max:20',
        ]);

        $account = new Account();
        $account -> username = $request -> username;
        $account -> email = $request -> email;
        $account -> password = $request -> password;

        $res = $account -> save();
        if($res){
            return back() -> with('done', 'Ban da dang ky tai khoan thanh cong');
        }else{
            return back() -> with('fail', 'Da phat hien ra loi !!');
        }
    }
}
