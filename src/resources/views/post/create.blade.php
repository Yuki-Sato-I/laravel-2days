@extends('layouts/default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/post_create.css') }}">
@endsection

@section('title', '画像投稿')

@section('content')
<div class="row" style="margin: 50px auto;">
  <div class="col-md-6 col-md-offset-3">
    <h1 style="text-align: center;">画像投稿</h1>
    <form action="/posts" method="post" enctype="multipart/form-data">
      @csrf
      <div>
        <label for="image">写真を選択(png,jpeg,jpgのみ)</label>
        <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg" required>

        <label for="content">キャプション</label>
        <textarea name="title" id="content" rows="4" class="form-control" maxlength="200" required></textarea>

        <div style="margin: 10px auto;">
          <input type="submit" class="btn btn-primary btn-block" value="送信">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection