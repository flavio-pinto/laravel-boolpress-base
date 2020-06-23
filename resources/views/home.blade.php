@extends('layouts.main')

@section('content')
    <h1>Welcome to our blog!</h1>
    <a href="{{route('posts.create')}}">Crea un nuovo post</a>
@endsection