@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://avatars0.githubusercontent.com/u/8663561?s=460&v=4" style=" width:150px; height:150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        {{-- <div><h1>{{ $user->username }}</h1></div> --}}
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->name }}</h1>
            <a href="/p/create">Add New Post</a>
        </div>
            <div class="d-flex">
            <div class="pr-5"><strong>{{$user->posts->count()}}</strong> Posts</div>
                <div class="pr-5"><strong>500</strong> Followers</div>
                <div class="pr-5"><strong>25</strong> Following</div>
            </div>

            {{-- <div class="pt-4 font-weight-bold">Sourav Roy</div>
            <div>Love Travels ❤🛫 <br> Life Is Too Short 😥 So Enjoy The Life 😎😍</div>
            <div><a href="">https://www.facebook.com/SOURAVROY.CSE</a></div> --}}

        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>Love Travels ❤🛫 {{$user->profile->description}} 😎😍</div>
            <div><a href="">{{$user->profile->url ?? 'N/A'}}</a></div>
            
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)

        <div class="col-4 pb-4">
        <a href="/p/{{ $post->id }}">
                 <img src="/storage/{{ $post->image }}"class="w-100">          
            </a>        
        </div>

        @endforeach
    </div>


</div>
@endsection
