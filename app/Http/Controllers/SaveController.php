<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Save;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Facades\Auth;


class SaveController extends Controller
{
    public function save(Request $request)
    
    {
        if (Auth::check()&& Auth::user()->role_id==1){
        $ekle=new Save();
        $ekle->post_id = $request->input('post_id');
        $ekle->user_id = Auth::user()->id;
        $ekle->save();
        return redirect()->back()->with('message', 'Oyunlar Listenize Kaydedildi');;

        

        }

    }


    public function kaydedilenler(){

        $data['hits'] = Post::orderBy('hit',  'DESC')->paginate(10);
      $data['save'] = Save::orderBy('id' , 'DESC');

        return view('game.save' , $data);
    }


    public function bildirimler(){


        
       
       
     
     
        $posts =   Comment::orderBy('id',  'DESC')->paginate(10);
        $data['comment'] = $posts;
        $data['hits'] = Post::orderBy('hit',  'DESC')->paginate(10);
        $data['posts'] = Post::orderBy('id',  'DESC')->paginate(10);
        $data['rastgelePosts'] = Post::inRandomOrder()->paginate(10);
       
        $data['categories'] = Category::inRandomOrder()->get();
  
  

        SEOMeta::setTitle('Android Oyun Store | Bildirimler');
        SEOMeta::setDescription('Android Oyunlar Hakkında Android Oyun Store Kullanıcılarının Yorumları.');

        return view('game.bildirimler', $data);


    }


}
