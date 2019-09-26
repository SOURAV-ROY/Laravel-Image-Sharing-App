<?php

namespace App\Http\Controllers;

use App\User;
//use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

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
        //     Edit View Is Protected
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile','public');
// Image Resize *******************************************************
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
        }

//        $user->profile->update($data);
//        auth()->user()->profile->update($data);

//        dd(array_merge(
//            $data,
//            ['image' => $imagePath]
//        ));

        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        return redirect("/profile/{$user->id}");

    //     dd($data);
    }
}
