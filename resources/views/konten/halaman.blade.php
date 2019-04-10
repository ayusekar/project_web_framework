<link rel="stylesheet" type="text/css" href="/css/ayu.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/ayu.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/ayu.css')}}">
<link rel="stylesheet" type="text/css" href="/css/ayu.css">

<div class="a">
@extends('layout.layout')
@section('title',$title)
@section('sidebar')
@parent

<li class="nav-item">
	<a class="nav-item">
</li>
@endsection
@section('content')
<img src="harry.jpg" width="100%" height="70%">

<p>{{ $konten }}</p>
@stop
</div>