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

    public function main(){
        return view ('auth.main_page');
    }

    

    public function register_controller(Request $req){
        $req -> validate([
            'username' => 'required',
            'email' => 'required|email|unique:accounts',
            'password' => 'required|min:6|max:12',
        ]);
        $acc = new Account();
        $acc -> username = $req -> username;
        $acc -> email = $req -> email;
        $acc -> password = Hash::make($req -> password) ;
        $res = $acc->save();
        if($res){
            return back()-> with('success','Error');
        }else{
            return back()-> with('fail','Error');
        }
    }

    public function login_controller(Request $req){
        $req -> validate([
            'username' => 'required',
            'password' => 'required|min:6|max:12',
        ]);

        $user_infor = Account::where('username','=',$req-> username)-> first();
        if(!$user_infor){
            return back() -> with('fail', 'Error detected !!');
        }else{
            if(Hash::check($req -> password, $user_infor -> password)){
                $req -> session() -> put('LogUser', $user_infor -> id);
                return redirect ('/main');
            }else{
                return back() -> with('fail', 'Password invalid (wrong pas, etc... !!');
            }
            
        }
    }
}
