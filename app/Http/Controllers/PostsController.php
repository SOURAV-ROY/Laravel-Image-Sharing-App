<?php

namespace App\Http\Controllers;

// use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //Use Middleware For Authentication For Protection
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
            // dd(request('image')->store('uploads','public'));
            
            $imagePath = request('image')->store('uploads','public');
        // Create date For User **************************
            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'image'   => $imagePath,
            ]);

        // $post = new \App\Post();
        // $post->caption = $data['caption'];
        // $post->save();

        // \App\Post::create($data);

        // dd(request()->all());
            return redirect('/profile/'. auth()->user()->id);
    }
}
