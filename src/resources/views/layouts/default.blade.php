<!DOCTYPE html>
<html lang="ja">
<head>
  <title>
    @section('title')
      Laravel
    @show
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/layouts/header.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  @yield('css')
  @yield('script')
</head>
@include('layouts/header')

@if(Session::has('flash'))
  @foreach (session('flash') as $type => $message)
    <div class="alert alert-{{$type}}">
      メッセージ：{{ $message }}
    </div>
  @endforeach
@endif

@yield('content')
