@extends('layouts/default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/like/index.css') }}">
@endsection

@section('title', 'いいねしたユーザー')

@section('content')
<div class="container">
    @if (count($post->likes) !== 0)
        @foreach ($post->likes as $like)
            <div class="user">
                <a href="/users/{{$like->user->id}}"><img src="https://github.com/{{ $like->user->github_id }}.png" width="100" height="100"></a>
                <a href="/users/{{$like->user->id}}">{{ $like->user->github_id }}</a>
            </div>
        @endforeach
    @else
        <div class="user" style="text-align: center;">
            いいねしたユーザーはいません
        </div>
    @endif

</div>
@endsection