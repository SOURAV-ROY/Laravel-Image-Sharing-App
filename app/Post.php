<?php

namespace App;

// use App\Post;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//  Protected Guarded ********************************
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
