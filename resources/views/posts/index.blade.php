@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)

    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>

        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                               <span class="text-info">{{ $post->user->name }}</span>
                            </a> |
                            <a href="#" class="pl-3 text-danger">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

            </div>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-success pr-2">{{ $post->user->username }} >> </span>
                        </a>
                    </span> {{$post->caption}}
                </p>
        </div>
    </div>
        @endforeach

</div>
@endsection
