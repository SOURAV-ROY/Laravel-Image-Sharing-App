<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Protected Array Enable For This Guard**********************
    protected $guarded = [];

// Default Profile Image ***************************************
    public function profileImage(){

        $profileImagePath = ($this->image) ? $this->image : '/profile/HfxxL9pX9otBQCteetPDONTB6g7iyrJUeJmVs9Ax.png';
        return '/storage/' .$profileImagePath;
    }

    public function user(){

            return $this->belongsTo(User::class);
        }

}
