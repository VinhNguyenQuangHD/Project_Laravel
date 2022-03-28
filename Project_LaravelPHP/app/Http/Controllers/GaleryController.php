<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Image;
use Illuminate\Http\Request;


class GaleryController extends Controller
{
    public function view_galerry($id, Request $req){
        $data = Account::find($id);

        $username = $req->username;
        $data2 = Image::where('owner','like','%'.$username.'%')->get();
        return view('auth.galery',['galery' => $data],['datas' => $data2]);
    }
}
