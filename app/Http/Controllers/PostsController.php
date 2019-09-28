<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    //Use Middleware For Authentication For Protection
    public function __construct()
    {
        $this->middleware('auth');
    }

//  Create Method *******************************************************
    public function create()
    {
        return view('posts.create');
    }

//  Index Method *******************************************************
    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');

//   $posts = Post::whereIn('user_id', $users)->orderBy('created_at', 'DESC')->get();
        $posts = Post::whereIn('user_id', $users)->latest()->get();
//   dd($users);
//   dd($posts);
        return view('posts.index',compact('posts'));
    }


//  Store Method *******************************************************
    public function store()
    {
        $data = request()->validate([
            // 'another' => '',
            'caption' => 'required',
            'image'   => ['required','image'],

        ]);
            // dd(request('image')->store('uploads','public'));

        $imagePath = request('image')->store('uploads','public');
//      Image Resize *******************************************************
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        // Create date For User **************************
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image'   => $imagePath,
        ]);

            return redirect('/profile/'. auth()->user()->id);

        // $post = new \App\Post();
        // $post->caption = $data['caption'];
        // $post->save();

        // \App\Post::create($data);

        // dd(request()->all());
    }
//  public function show( $post){ ***Its Not Right***

    public function show(Post $post){

            return view('posts.show', compact('post'));

        // dd($post);
        // return view('posts.show', [

        //     'post' => $post,
        // ]);

    }
}
