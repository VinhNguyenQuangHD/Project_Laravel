<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function view_upload_form(){
        $images = Image::all(); 
        return view('auth.upload_img',compact('images'));
    }

    public function upload_image(Request $req){

        $req -> validate([
            'image_name' => 'required',
            'image_date' => 'required',
            'image_storage' => 'required|integer',
        ]);

        $size = $req->file('image')->getSize();
        $name = $req->file('image')->getClientOriginalName();
        $date = date('d-m-Y');
        $req->file('image')->storeAs('/storage/image',$name);

        $image = new Image();
        $image->image_name = $name;
        $image->image_storage = $size;
        $image->image_date = $date;
        $image->image_user = $req->image_user;
        $res = $image->save();
        if($res){
            return back()->with('complete','Image has been uploaded');
        }else{
            return back()->with('fail','Image cannot upload');
        }
    }
}
