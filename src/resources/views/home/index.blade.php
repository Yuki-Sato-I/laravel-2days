@extends('layouts/default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home/index.css') }}">
@endsection

@section('script')
  <script src="{{ asset('js/post.js') }}" type="text/javascript"></script> 
@endsection

@section('title', 'ホーム')

@section('content')
<div class="posts-container">
    @foreach ($posts as $post)
        <div class="post-container">
            <div class="post">
                {{ $post->user->github_id }}
                <img src="{{ $post['image'] }}" width="100" height="100">
                {{ $post->title }}
                {{ count($post->likes) }}
                <form action="/posts/{{ $post['id'] }}" method="post" id="del" style="display: inline-block;">
                    @csrf
                    {{ method_field('delete') }}
                  <a onclick="deleteGoods(this);" href="#" class="btn btn-danger btn-sm">削除</a></h2>
            </div>
        </div>
    @endforeach
</div>
@endsection
