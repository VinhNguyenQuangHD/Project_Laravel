<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeShareController extends Controller
{
    public function like_form($id){
        $data = Image::find($id);
        return view('auth.like', ['like' => $data]);
    }

    public function like_this_image(Request $req){
        $req -> validate([
            'user_name' => 'required'
        ]);

        $like = new Like();
        $like -> user_name = $req -> user_name;
        $like -> image_id = $req -> image_id;
        $like -> owner_image = $req -> owner_image;
        $res = $like -> save();
        if($res){
            return back()-> with('success','Like complete');
        }else{
            return back()-> with('fail','Like fail');
        }
    }
}
