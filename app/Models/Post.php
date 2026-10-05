<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\Comment;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'postings';
    protected $fillable = ['id', 'user_id', 'title', 'body'];
        //insercion masiva a la bd 

        public function user()
    {
        return $this->belongsTo(User::class);   

}
        public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}