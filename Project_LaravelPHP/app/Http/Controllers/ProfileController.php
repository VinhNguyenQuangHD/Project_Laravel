<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view ('auth.profile_page');
    }

    public function admin(){
        return view('auth.admin_main_profile');
    }

    public function show_data(){
        $profiles = Profile::all();
        return view('admin_main_profile') -> with('profile',$profiles);
    }

    public function create(Request $req){
        $req -> validate([
            'username' => 'required',
            'email' => 'required|email|unique:profiles',
            'socialnetwork' => 'required',
            'ages' => 'required',
            'type' => 'required',
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

    public function update(Request $req, Profile $profile){
        $req -> validate([
            'username' => 'required',
            'email' => 'required|email|unique:profiles',
            'socialnetwork' => 'required|max:100',
            'ages' => 'required|integer',
            'type' => 'required|max:50',
        ]);

        $profile -> username = $req -> username;
        $profile -> email = $req -> email;
        $profile -> socialnetwork = $req -> socialnetwork;
        $profile -> ages = $req -> ages;
        $profile -> type = $req -> type;
        $profile -> save();
        return 0;
    }

    public function delete(){
        
    }

    public function search(){

    }
}
