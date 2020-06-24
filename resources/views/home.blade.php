@extends('layouts.main')

@section('content')
    <h1>Welcome to our blog!</h1>
    <a href="{{route('posts.create')}}">Crea un nuovo post</a>

    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <h5 class="author">di {{$post->user['name']}}</h5> {{-- si può scrivere anche $post->user->name --}}
        <h6>Created: {{$post->created_at}}, Last modified: {{$post->updated_at}}</h6>
        <p>{{$post->body}}</p>
        <a href="{{route('posts.show', $post->slug)}}">Link articolo completo</a>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
@endsection