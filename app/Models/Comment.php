<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;



    public function getUsers()
    {


        return $this->hasOne(User::class,'id','commenter_id');

    }

    public function getPosts()
    {


        return $this->hasOne(Post::class,'id','commentable_id');

    }
}
