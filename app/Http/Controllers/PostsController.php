<?php

namespace App\Http\Controllers;

// use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //Use Middleware For Authentication
    public function __construct(){

        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        
        $data = request()->validate([
            // 'another' => '',
            'caption' => 'required',
            'image'   => ['required','image'],

        ]);
        // Create date For User **************************
            auth()->user()->posts()->create($data);

        // $post = new \App\Post();
        // $post->caption = $data['caption'];
        // $post->save();

        // \App\Post::create($data);

        // dd($request->all());
        dd(request()->all());

    }
}
