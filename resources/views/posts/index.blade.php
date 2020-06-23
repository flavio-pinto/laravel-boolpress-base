@extends('layouts.main')

@section('content')
    <h1>Blog archive</h1>
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <h4 class="author">{{$post->user['name']}}</h4> {{-- si può scrivere anche $post->user->name --}}
        <h4>Created: {{$post->created_at}}, Last modified: {{$post->updated_at}}</h4>
        <p>{{$post->body}}</p>
        <a href="{{route('posts.show', $post->id)}}">Link articolo completo</a>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
    {{-- NAVIGAZIONE PER VEDERE GLI ALTRI POSTS --}}
    <h4>Navigation</h4>
    {{$posts->links()}}{{-- sfrutta "paginate" per poter navigare nelle varie pagine di posts. Si può stilare ed è Bootstrap-ready. VEDI DOCUMENTAZIONE --}}
@endsection