<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Image;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($id, Request $req){
        $data =  Account::find($id);
        $owner_name = $req -> owner;
        $finding = Image::where('owner','like', '%'.$owner_name.'%');
        return view('auth.profile_page',['profile' => $data], ['images' => $finding]);
    }

    public function admin(){
        $data = Account::all();
        return view('auth.admin_main_profile',['profiles' => $data]);
    }

    public function admin_create_view(){
        return view ('auth.admin_main_profile_create');
    }

    public function show_data(){
        $profiles = Profile::all();
        return view('admin_main_profile') -> with('profile',$profiles);
    }

    public function admin_update_view($id){
        
        $data =  Account::find($id);
        return view('auth.admin_main_profile_update',['profile' => $data]);
    }

    public function create(Request $req){
        $req -> validate([
            'username' => 'required',
            'email' => 'required|email|unique:profiles',
            'socialnetwork' => 'required|max:170',
            'ages' => 'required|integer',
            'type' => 'required|max:10',
        ]);

        $profile = new Profile();
        $profile -> username = $req -> username;
        $profile -> email = $req -> email;
        $profile -> socialnetwork = $req -> socialnetwork;
        $profile -> ages = $req -> ages;
        $profile -> type = $req -> type;
        $res = $profile -> save();
        if($res){
            return back() ->with('success','User data has change !!');
        }else{
            return back() ->with('fail','User data not change change !!');
        }

    }

    public function read(){
        
    }

    public function update(Request $req){
        $data = Account::find($req->id);
        $data->username = $req->username;
        $data->email = $req->email;
        $data->socialnetwork = $req->socialnetwork;
        $data->ages = $req->ages;
        $data->type = $req->type;
        $data->save();

        $data2 = Account::find($req->id);
        return view('auth.profile_page',['profile' => $data2]);
    }

    public function delete($id){
        $data = Profile::find($id);
        $data -> delete();

        $data2 = Profile::all();
        return view('auth.admin_main_profile',['profiles' => $data2]);
    }

    public function search(){

    }
}
