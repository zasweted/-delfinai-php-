@extends('home')

@section('title')
Super Fun
@endsection
@section('fun')

@include('kitkas.bu')
@if($kuku == 'keturi')

<h1 style="color: skyblue;">Labai gerai</h1>

@else

<h1 style="color: crimson;">Nelabai gerai</h1>

@endif

@foreach($mas as $value)
<h2 style="color: green;">{{$value}}</h2>
@endforeach
@endsection
