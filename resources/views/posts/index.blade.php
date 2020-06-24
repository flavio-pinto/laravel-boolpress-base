@extends('layouts.main')

@section('content')
    <h1>Blog archive</h1>
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <h5 class="author">{{$post->user['name']}}</h5> {{-- si può scrivere anche $post->user->name --}}
        <h6>Created: {{$post->created_at}}, Last modified: {{$post->updated_at}}</h6>
        <p>{{$post->body}}</p>
        <a href="{{route('posts.show', $post->slug)}}">Link articolo completo</a>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
    {{-- NAVIGAZIONE PER VEDERE GLI ALTRI POSTS --}}
    <div class="wrap-pagination mt-5 d-flex justify-content-end">
        {{$posts->links()}}{{-- sfrutta "paginate" per poter navigare nelle varie pagine di posts. Si può stilare ed è Bootstrap-ready. VEDI DOCUMENTAZIONE --}}
    </div>
@endsection