@extends('layouts.main')

@section('content')
    {{-- alert post aggiunto --}}
    @if (session('post_saved'))
        <div class="alert">
            <span>Post creato con successo: </span>"{{ session('post_saved') }}"
        </div>
    @endif

    <h2>{{$post->title}}</h2>
    <h4 class="author">Scritto da: {{$post->user['name']}}</h4> {{-- si può scrivere anche $post->user->name --}}
    <h4>Created: {{$post->created_at}}, Last modified: {{$post->updated_at}}</h4>
    <p>{{$post->body}}</p>
    <br>
    <h3>Commenti:</h3>
    @forelse($post->comments as $comment)
        <h4>Commento inserito da: {{$comment->nickname}}<br>il {{$comment->created_at}}</h4>
        <p>{{$comment->body}}</p>
        @if(!$loop->last)
        <hr>
        @endif
    @empty
        <span>Non ci sono commenti!</span>
    @endforelse
@endsection