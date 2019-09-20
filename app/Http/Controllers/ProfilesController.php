<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index($user){

        // dd($user);
        // dd(User::find($user));
        $user = User::find($user);
        return view('home', [
            'user' => $user,
        ]);
    }
}
