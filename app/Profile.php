<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Protected Array Enable For This Guard**********************
    protected $guarded = [];

    public function user(){

            return $this->belongsTo(User::class);
        }

}
