@extends('layouts.main')

@section('content')
    <h2>{{$post->title}}</h2>
    <h4 class="author">{{$post->user['name']}}</h4> {{-- si può scrivere anche $post->user->name --}}
    <h4>Created: {{$post->created_at}}, Last modified: {{$post->updated_at}}</h4>
    <p>{{$post->body}}</p>
@endsection