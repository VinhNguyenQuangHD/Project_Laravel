<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function view_current_image($id){
        $data = Image::find($id);
        return view('auth.galerry_detail',['image' => $data]);
    }

   
}
