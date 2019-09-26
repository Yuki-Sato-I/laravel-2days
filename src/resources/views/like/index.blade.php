@extends('layouts/default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/like/index.css') }}">
@endsection

{{-- @section('script')
  <script src="{{ asset('js/post.js') }}" type="text/javascript"></script> 
@endsection --}}

@section('title', 'いいねしたユーザー')

@section('content')
@foreach ($post->likes as $like)
    {{-- {{ $like->user }} --}}
    @if (!$like->user->image)
        <img src="{{ asset('image/noimage.png') }}" width="100" height="100">
    @else 
        <img src="{{ $like->user->image }}" width="100" height="100">
    @endif

    {{ $like->user->github_id }}
@endforeach
@endsection