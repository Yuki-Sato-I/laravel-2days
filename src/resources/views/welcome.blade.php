@extends('layouts/default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/layouts/login.css') }}">
@endsection

@section('title', 'ログイン画面')

@section('content')
    <a class="btn btn-primary btn-lg login-btn" href="/login/github">githubアカウントでログイン</a>
@endsection
