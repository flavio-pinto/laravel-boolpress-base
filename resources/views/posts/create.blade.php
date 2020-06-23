@extends('layouts.main')

@section('content')
    <h1>Create new post</h1>
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
        <form action="{{route('posts.store')}}" method="POST" id="postform">
            @csrf
            @method('POST')
            {{-- titolo --}}
            <div class="form-group" style="display: inline-block">
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" placeholder="Titolo del post">
            </div>
            {{-- submit --}}
            <input type="submit" value="Invia" style="display: inline-block">
            <br><br>
            {{-- testo del post --}}
            <div class="form-group">
                <label for="body">Testo</label>
                <textarea name="body" id="body" form="postform" cols="100" rows="50" placeholder="inserisci testo del post"></textarea>
                {{-- <input type="textarea" id="body" name="body" placeholder="Testo del post"> --}}
            </div>
            <br>
        </form>
    </div>
@endsection