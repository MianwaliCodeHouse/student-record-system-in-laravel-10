<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;

class uploadController extends Controller
{
    public function uploadOnServer(Request $r){
        $r->validate(
            [
                'userImage'=>'required|image: png,jpg,jpeg'
            ]
            );
        $newName=time().$r->file('userImage')->getClientOriginalName();
        $uploadRecord=upload::find($r['id']);
        $previousImg=$uploadRecord->userImage;
        unlink(public_path().'/uploads/'.$previousImg);
        $r->file('userImage')->move(public_path().'/uploads',$newName);
        $uploadRecord->userImage=$newName;
        $uploadRecord->save();
        return redirect(route('image.display'));
    }
    public function updateImage($id){
        $data=compact('id');
        return view('updateImage')->with($data);
    }
    public function deleteImage($id){
        $record=upload::find($id);
        $img=$record->userImage;
        unlink(public_path().'/uploads/'.$img);
        $record->delete();
        return redirect(route('image.display'));
    }
    public function display(){
        $images=upload::all();
        $images=$images->toArray();
        $data=compact('images');
        return view('readImage')->with($data);
    }
    public function form(){
        return view('uploadImage');
    }
    public function upload(Request $r){
        $r->validate(
            [
                'userImage'=>'required|image: png,jpg,jpeg'
            ]
            );

        if(!empty($r->file('userImage'))){  
            $ext=$r->file('userImage')->getClientOriginalExtension();
            $name=time().'.'.$ext;
            $r->file('userImage')->move(public_path().'/uploads',$name);
            if(!empty($name)){
                $userImg=new upload;
                $userImg->userImage=$name;
                $userImg->save();
            }
        }
        return redirect(route('image.display'));
    }
}
