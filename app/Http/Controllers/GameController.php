<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi



use App\Models\Post;
use App\Models\Category;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;




class GameController extends Controller
{


    public function welcome(){


        
         SEOMeta::setTitle('Android Oyun Store');
         SEOMeta::setDescription('Android Oyun Store İle Bir Çok Oyunun Detayına ve İndirme Linkine Sahip Olabilirsiniz.');

         SEOMeta::setCanonical('http://androidoyunstore.com/');

        OpenGraph::setDescription('Android Oyun Store İle Bir Çok Oyunun Detayına ve İndirme Linkine Sahip Olabilirsiniz.');
        OpenGraph::setTitle('Android Oyun Store');
        OpenGraph::setUrl('http://androidoyunstore.com/');
        OpenGraph::addProperty('type', 'Android Oyunlar , Yarış Oyunları , Hileli Oyunlar');

        TwitterCard::setTitle('Android Oyun Store');
        TwitterCard::setSite('@devinfollow');

        JsonLd::setTitle('Android Oyun Store');
        JsonLd::setDescription('http://androidoyunstore.com/');
        JsonLd::addImage('http://www.androidoyunstore.com/assets/images/logo/logo-beyaz.png');
        JsonLd::addImage('http://www.androidoyunstore.com/assets/images/logo/logo-siyah.png');

        $data['hits'] = Post::orderBy('hit',  'DESC')->paginate(10);

        $data['posts'] = Post::orderBy('id',  'DESC')->paginate(13);

        

        $data['categories'] = Category::inRandomOrder()->get();
        $data['rastgelePosts'] = Post::inRandomOrder()->paginate(10);


		return view('home' ,$data); 

   

    }


   
    public function detail( $slug){

     


     

        $posts = Post::where('slug' , $slug)->first() ?? abort(403,'Kayboldun Sanırım');
       
        $posts->increment('hit');
        $data['hits'] = Post::orderBy('hit',  'DESC')->paginate(10);
  
        $data['posts'] = $posts;
        $data['rastgelePosts'] = Post::inRandomOrder()->paginate(10);
       
        $data['categories'] = Category::inRandomOrder()->get();
   
        $data['tags'] = Post::inRandomOrder()->get();

        SEOMeta::setTitle($posts->seo_title);
        SEOMeta::setDescription($posts->body);
        SEOMeta::addMeta('article:published_time', $posts->careated_at, 'property');
        SEOMeta::addMeta('article:section', $posts->category, 'property');
        SEOMeta::addKeyword($posts->meta_keywords);

        OpenGraph::setDescription($posts->resume);
        OpenGraph::setTitle($posts->title);
        OpenGraph::setUrl($posts->title);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage($posts->image);
        OpenGraph::addImage($posts->images);
        OpenGraph::addImage(['url' => $posts->images, 'size' => 300]);
        OpenGraph::addImage($posts->images , ['height' => 300, 'width' => 300]);
        
        JsonLd::setTitle($posts->title);
        JsonLd::setDescription($posts->resume);
        JsonLd::setType('Article');
        JsonLd::addImage($posts->images);










        return view('game.detail',$data);
  
      }
  

      public function category($slug){

        $category = Category::where('slug' , $slug)->first() ?? abort(403,'Kayboldun Sanırım');

        SEOMeta::setTitle('Android Oyun Store | Kategoriler ');
        SEOMeta::setDescription($category->name);
        SEOMeta::addMeta('article:published_time', $category->careated_at, 'property');
        SEOMeta::addMeta('article:section', $category->category, 'property');
        SEOMeta::addKeyword($category->meta_keywords);

        OpenGraph::setDescription($category->resume);
        OpenGraph::setTitle($category->title);
        OpenGraph::setUrl($category->title);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage($category->image);
        OpenGraph::addImage($category->images);
        OpenGraph::addImage(['url' => $category->images, 'size' => 300]);
        OpenGraph::addImage($category->images , ['height' => 300, 'width' => 300]);
        
        JsonLd::setTitle($category->title);
        JsonLd::setDescription($category->resume);
        JsonLd::setType('Article');
        JsonLd::addImage($category->images);


      
        $data['hits'] = Post::orderBy('hit',  'DESC');
  
          $category = Category::where('slug' , $slug)->first() ?? abort(403,'Kayboldun Sanırım');
           $data['category'] = $category;
           $data['rastgelePosts'] = Post::inRandomOrder()->paginate(6);
           $data['categories'] = Category::inRandomOrder()->get();
  
  
           $data['posts'] = Post::where('category_id' , $category->id)->orderBy('id',  'DESC')->paginate(10);
           return view('game.category' , $data);
       
  
          
      }

      public function search(Request $request){

        
        $data['hits'] = Post::orderBy('hit',  'DESC')->paginate(10);
    
            $search = $request->get('search');
        $data['posts'] = Post::where ( 'title',  'LIKE', '%' . $search . '%' )->paginate(10);
            return view('game.search' , $data);
            
    
        }
    
    
}
