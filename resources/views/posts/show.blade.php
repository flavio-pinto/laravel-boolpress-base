@extends('layouts.main')

@section('content')
    {{-- alert post aggiunto --}}
    @if (session('post_saved'))
        <div class="alert alert-success">
            <span>Post creato con successo: </span>"{{ session('post_saved') }}"
        </div>
    @endif

    <h2 class="mb-4">{{$post->title}}</h2>
    <h4 class="author">Scritto da: {{$post->user['name']}}</h4> {{-- si può scrivere anche $post->user->name --}}
    <h4>Created: {{$post->created_at}}, Last modified: {{$post->updated_at}}</h4>
    <p>{{$post->body}}</p>
    
    <section class="wrap-tags mt-2 mb-2">
        <h5>Tags</h5>
        @forelse ($post->tags as $tag)
            <span class="badge badge-pill badge-primary">{{$tag->name}}</span>
        @empty
            <p>Nessun tag presente</p>
        @endforelse
    </section>

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