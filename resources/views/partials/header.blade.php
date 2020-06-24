<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>
    <title>Blog</title>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <a href="{{route('home')}}" class="navbar-brand">Blog</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.index')}}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.index')}}">Archive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.create')}}">New Post</a>
                </li>
            </ul>
        </nav>
    </header>