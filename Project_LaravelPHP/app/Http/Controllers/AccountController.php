<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function login(){
        return view ('auth.login_page');
    }

    public function register(){
        return view ('auth.register_page');
    }

    public function main(Request $req){
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
        $acc -> ages = "None";
        $acc -> socialnetwork = "None";
        $acc -> type = "None";
        $res = $acc->save();
        if($res){
            return back()-> with('success','Complete');
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
                
                $data =  Account::find($user_infor -> id);
                $data2 = Image::all();
                return view('auth.main_page',['account' => $data],['images' => $data2]);
                //return redirect ('/main');
            }else{
                return back() -> with('fail', 'Password invalid (wrong pas, etc... !!');
            }
            
        }
    }

    public function my_images($id, Request $req){
        $data = Account::find($id);

        $username = $req->username;
        $data2 = Image::where('owner','like','%'.$username.'%')->get();
        return view('auth.galery',['account' => $data],['datas' => $data2]);
    }
}
