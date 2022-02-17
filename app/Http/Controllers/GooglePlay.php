<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GooglePlay extends Controller
{
 public function saveImage(Request $request){
if (Auth::check()){
    $ekle=new Image();
    $ekle->post_id = $request->input('post_id');
    $ekle->user_id = Auth::user()->id;
    $ekle->images = $request->input('image');
    $ekle->save();
 

}
  
return redirect()->back()->with('message', '1 Resim Başarıyla Eklendi');;

 
 }


 
 public function imageDelete($id){


    $post = Image::find($id);
 
    

    $post->delete();
    return redirect()->back();
}
}
