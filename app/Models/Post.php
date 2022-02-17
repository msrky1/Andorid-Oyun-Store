<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast;
use Laravelista\Comments\Commentable;

use App\Models\Test;


class Post extends Model
{

  use Commentable;

   public  function getCategory(){

     return  $this->hasOne('App\Models\Category' , 'id', 'category_id');
    
       }


       public function getComment()
       {
        return $this->hasMany('App\Models\Comment' , 'commentable_id', 'id')->count();

       }  

       public function getImage()
       {
        return $this->hasMany('App\Models\Image','post_id');

       }  
   
       public function getDownload()
       {
        return $this->hasMany('App\Models\Download','post_id');

       }  
   
   
    
    
       
}
