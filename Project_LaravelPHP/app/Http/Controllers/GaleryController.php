<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Image;
use App\Models\Title;
use Illuminate\Http\Request;


class GaleryController extends Controller
{
    public function view_galerry($id, Request $req){
        $data = Account::find($id);

        $username = $req->username;
        $data2 = Image::where('owner','like','%'.$username.'%')->get();
        return view('auth.galery',['account' => $data],['datas' => $data2]);
    }


    public function display_same_type($id){
        $data = Image::where('type','like','%'.$id.'%')->get();
        return view('auth.same_type',['type' => $data]);
    }

    public function display_add_type(){
        return view('auth.admin_main_add_new_type');
    }

    public function add_new_type(Request $req){
        $req -> validate([
            'title_description' =>'required'
        ]);

        $type = new Title();
        $type -> title_description = $req -> title_description;
        $res = $type -> save();

        if($res){
            return back()->with('success','Types uploaded');
        }else{
            return back()->with('fail','Image corrupted');
        }
        return ('auth.admin_main_add_new_type');
    }

}
