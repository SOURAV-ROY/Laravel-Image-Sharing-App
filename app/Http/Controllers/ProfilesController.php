<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //     Edit View Is Protected
            $this->authorize('update', $user->profile);
            
            return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
            $data = request()->validate([
                'title' => 'required',
                'description' => 'required',
                'url' => 'url',
                'image' => '',
            ]);

            auth()->$user->profile->update($data);
        //     $user->profile->update($data);

            return redirect("/profile/{$user->id}");

        //     dd($data);
    }
}
