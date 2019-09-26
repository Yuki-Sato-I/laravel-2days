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
                <div class="post-upper">
                    <a href="/users/{{ $post->user->id }}"><span>{{ $post->user->github_id }}</span></a>
                    @if (session('github_id') === $post->user->github_id)
                        <form action="/posts/{{ $post->id }}" method="post" id="del{{ $post->id }}" style="display: inline-block;">
                            @csrf
                            {{ method_field('delete') }}
                            <a onclick="deleteGoods(this, {{ $post->id }});" href="#" class="btn btn-danger btn-sm">削除</a>
                        </form>
                    @endif
                </div>
                <img src="{{ $post['image'] }}">
                <div class="post-content">
                    <p style="word-wrap: break-word;">{!! nl2br(e($post->title)) !!}</p>
                </div>
                <div class="post-lower">
                    @if (session('login_user'))
                        {{-- @if ($post->likes ===) --}}
                        <a href="#" class="fas fa-heart">{{ count($post->likes) }}</a> 
                        {{-- @else --}}
                        <a href="#" class="far fa-heart">{{ count($post->likes) }}</a>
                        {{-- @endif --}}
                    @else
                        <span class="far fa-heart">{{ count($post->likes) }}</span>
                    @endif

                    <a href="/posts/{{$post->id}}/likes" >いいねしたユーザー</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
