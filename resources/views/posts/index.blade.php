@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)

    <div class="row">

        <div class="col-6 offset-3">

                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3 pt-3 pb-3">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                   <span class="text-info">{{ $post->user->name }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <p>
                    <span class="font-weight-bold">
                        {{$post->caption}}
                    </span>
                </p>
        </div>
        <div class="col-6 offset-3">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
    </div>
        @endforeach

</div>
@endsection
