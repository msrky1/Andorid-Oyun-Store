<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DownloadController extends Controller
{
     public function linkSave(Request $request){

        if (Auth::check())
        {

         $ekle=new Download();
        $ekle->post_id = $request->input('post_id');
        $ekle->user_id = Auth::user()->id;
        $ekle->links = $request->input('links');
        $ekle->obblink = $request->input('obblink');


        $ekle->save();

        return redirect()->back()->with('messagelink' , 'İndirme Linki eklendi');

     }

    }

    public function deleteLink($id)
    
    {

        $post = Download::find($id);
 
        $post->delete();
        return redirect()->back();

    }
}
