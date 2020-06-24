@extends('layouts.main')

@section('content')
    <h1 class="mb-4">Edit post</h1>
    {{-- if error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="create-product">
        <form action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PATCH')
            {{-- titolo --}}
            <div class="form-group" style="display: inline-block">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{old('title', $post->title)}}" placeholder="Titolo del post">
            </div>
            <br>
            {{-- testo del post --}}
            <div class="form-group">
                <label for="body">Testo</label>
                <textarea class="form-control" name="body" id="body" cols="100" rows="50" placeholder="inserisci testo del post">{{old('body', $post->body)}}</textarea>
            </div>
            {{-- tags --}}
            @foreach ($tags as $tag)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{$loop->iteration}}"
                        value="{{$tag->id}}"
                        @if($post->tags->contains($tag->id)) checked @endif> {{-- questo if serve a mettere "checked" ai tags che erano selezionati prima dell'edit --}}
                    <label for="tag-{{$loop->iteration}}">{{$tag->name}}</label>
                </div>
            @endforeach
            {{-- submit --}}
            <input class="btn btn-primary mt-4" type="submit" value="Aggiorna post" style="display: inline-block">
        </form>
    </div>
@endsection