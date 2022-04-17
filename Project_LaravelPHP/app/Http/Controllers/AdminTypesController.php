<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class AdminTypesController extends Controller
{
    public function display_admin_types(){
        $data = Title::all();
        return view('auth.admin_main_types', ['types' => $data]);
    }

    public function admin_type_update_view($id){
        
        $data =  Title::find($id);
        return view('auth.admin_main_types_update',['types' => $data]);
    }

    public function update_types(Request $req){
        $data = Title::find($req->id);
        $data->title_description = $req->title_description;
        $data->save();

        $data2 = Title::all();
        return view('auth.admin_main_types', ['types' => $data2]);
    }

    public function types_delete($id){
        $data = Title::find($id);
        $data -> delete();

        $data2 = Title::all();
        return view('auth.admin_main_types',['types' => $data2]);
    }

}
