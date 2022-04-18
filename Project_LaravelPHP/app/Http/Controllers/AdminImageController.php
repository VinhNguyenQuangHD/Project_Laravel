<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class AdminImageController extends Controller
{
    public function view_all(){
        $data = Image::all();
        return view('auth.admin_main_image', ['images' => $data]);
    }

    public function admin_update_image_view($id){
        
        $data =  Image::find($id);
        return view('auth.admin_main_image_update',['images' => $data]);
    }

    public function update_image(Request $req){
        $data = Image::find($req->id);
        $data->image = $req->image;
        $data->title = $req->title;
        $data->owner = $req->owner;
        $data->date = $req->date;
        $data->type = $req->type;
        $data->save();

        $data2 = Image::all();
        return view('auth.admin_main_image', ['images' => $data2]);
    }

    public function image_delete($id){
        $data = Image::find($id);
        $data -> delete();

        $data2 = Image::all();
        return view('auth.admin_main_image', ['images' => $data2]);
    }
}
