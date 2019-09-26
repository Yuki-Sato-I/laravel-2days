@extends('layouts/default')

@php
    $posts = $user->posts
@endphp

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/show.css') }}">
@endsection

{{-- @section('script')
  <script src="{{ asset('js/post.js') }}" type="text/javascript"></script> 
@endsection --}}

@section('title',$user->github_id.'のページ')

@section('content')
    <div class="container">
        <div class="user-container">
            <div class="user-div">
                <img src="https://github.com/{{ $user->github_id }}.png" width="250" height="250">
            </div>
            <div class="user-div">
                <div class="user-font">{{ $user->github_id }}</div>
            </div>
            <div class="good">
                <div class="container">
                    <span class="user-font">いいねカウント数</span>
                    <br>
                    <span>{{ count($user->likes) }}</span>
                </div>
            </div>

        </div>
    </div>

    @foreach ($posts as $post)
        <img src="{{ $post->image }}" width="300" height="300"></a>
    @endforeach
@endsection