<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    
    use HasFactory;
    //protected $table = 'comments';
    protected $fillable = ['id', 'post_id', 'body'];
        //insercion masiva a la bd

        public function post()
    {
        return $this->belongsTo(Post::class);  
}
}