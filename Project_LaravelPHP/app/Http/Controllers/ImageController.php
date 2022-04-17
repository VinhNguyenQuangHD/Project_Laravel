<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Image;
use App\Models\Like;
use App\Models\ReviewImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function view_current_image($id, Request $req){
        $data = Image::find($id);
        $image_title = $req-> title;
        $searching = ReviewImage::where('title','like','%'.$image_title.'%')->get();
        return view('auth.galerry_detail',['image' => $data],['comment' => $searching]);
    }

    public function open_review_form($id){
        $data = Image::find($id);
        return view('auth.review', ['image'=> $data]);
    }

    public function upload_review(Request $req){
        $req -> validate([
            'title'=>'required',
            'user'=>'required',
            'content'=>'required'
        ]);

        $review = new ReviewImage();
        $review -> title = $req->title;
        $review->user = $req->user;
        $review->content = $req->content;

        $res = $review->save();
        if($res){
            return back()->with('success','Comment uploaded');
        }else{
            return back()->with('fail','Comment fail !!!');
        }

        $data = Image::find($req -> id_user);
        return view('auth.galerry_detail',['image' => $data]);
    }
}
