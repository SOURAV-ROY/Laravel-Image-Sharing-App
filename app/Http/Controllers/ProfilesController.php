<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    // public function index($user){

    // public function index(\App\User $user){
    public function index(User $user){

//   Follow Or Not **************************************************************
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

//   Cache Work For This Line ****************************************************************
        $postCount = Cache::remember(
            'user.posts.'. $user->id,
            now()->addSeconds(30),
            function () use($user) {
            return $user->posts->count();
        });

        $followersCount = Cache::remember(
            'user.followers.'. $user->id,
            now()->addSeconds(30),
            function () use($user) {
            return $user->profile->followers->count();
        });

        $followingCount = Cache::remember(
            'user.following.'. $user->id,
            now()->addSeconds(30),
            function () use($user) {
            return $user->following->count();
        });

//   Now Use this **********************************************************
        return view('profiles.profile', compact('user', 'follows','postCount','followersCount','followingCount'));

        // dd($user);
        // dd(User::find($user));

//   First Use This :(Its aloso be corrrect)*********************************
        // $user = User::findOrFail($user);
        // return view('profiles.index', [
        //     'user' => $user,
        // ]);
    }

//  public function edit(\App\User $user){
    public function edit(User $user){
//      Edit View Is Protected
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){

//      Edit View Is Protected *************************************************
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile','public');

//          Image Resize ************************************************************
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

//        $user->profile->update($data);
//        auth()->user()->profile->update($data);

//        dd(array_merge(
//            $data,
//            ['image' => $imagePath]
//        ));

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
//      dd($data);
    }
}
