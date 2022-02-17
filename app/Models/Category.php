<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Category extends Model
{
    use HasFactory;
    use Commentable;

    protected $table = "categories";

    public function postCount(){

        return $this->hasMany('App\Models\Post' , 'category_id' , 'id')->count();

        // Bağlanacağımız Model   // Bağlanacağımız Sütun  // Bağlanacağımız id
    
       }

}
