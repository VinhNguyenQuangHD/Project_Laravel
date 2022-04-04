<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends Controller
{
    public function view_upload_form(){
        $date = date('d-m-Y');
        return view('auth.upload_img',['date' => $date]);
    }

   

    public function upload_image(Request $req){
        if($req->hasFile('file')){
            $req->validate([
                'image' => 'mimes:jpeg,jpg,png,svg',
            ]);
            $req->file->store('image','public');
            $image = new Image();
            $image->image = $req->file->hashName();
            $image->title = $req->title;
            $image->owner = $req->owner;
            $image->date = date('d-m-Y');
            $image->type = $req->type;
            $res = $image->save();
            if($res){
                return back()->with('success','Image uploaded');
            }else{
                return back()->with('fail','Image corrupted');
            }
            
        }
        return view('auth.upload_img');
    }
}
