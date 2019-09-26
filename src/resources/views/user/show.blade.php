@extends('layouts/default')

@php
    $posts = $user->posts
@endphp

@section('css')
<link rel="stylesheet" href="{{ asset('css/like/index.css') }}">
@endsection

{{-- @section('script')
  <script src="{{ asset('js/post.js') }}" type="text/javascript"></script> 
@endsection --}}

@section('title',$user->github_id.'のページ')

@section('content')
    @if (!$user->image)
        <img src="{{ asset('image/noimage.png') }}" width="100" height="100">
    @else 
        <img src="{{ $user->image }}" width="100" height="100">
    @endif
    {{ $user->github_id }}
    いいねカウント数{{ count($user->likes) }}
    @foreach ($posts as $post)
        <img src="{{ $post->image }}" width="100" height="100"></a>
    @endforeach
@endsection