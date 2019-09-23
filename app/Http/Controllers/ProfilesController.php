<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    // public function index($user){

    // public function index(\App\User $user){
    public function index(User $user){
// Now Use this *************************************************************
        return view('profiles.index', compact('user'));

        // dd($user);
        // dd(User::find($user));

// First Use This :(Its aloso be corrrect)**********************************
        // $user = User::findOrFail($user);
        // return view('profiles.index', [
        //     'user' => $user,
        // ]);
    }

    // public function edit(\App\User $user){
    public function edit(User $user){
            return view('profiles.edit', compact('user'));
    }
}
