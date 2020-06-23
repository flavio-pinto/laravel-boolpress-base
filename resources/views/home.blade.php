@extends('layouts.main')

@section('content')
    <h1>Welcome to our blog!</h1>
    <a href="{{route('posts.create')}}">Crea un nuovo post</a>

    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <h4 class="author">di {{$post->user['name']}}</h4> {{-- si può scrivere anche $post->user->name --}}
        <h4>Created: {{$post->created_at}}, Last modified: {{$post->updated_at}}</h4>
        <p>{{$post->body}}</p>
        <a href="{{route('posts.show', $post->id)}}">Link articolo completo</a>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
@endsection