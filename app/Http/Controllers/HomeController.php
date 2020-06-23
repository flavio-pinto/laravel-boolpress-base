<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest('id', 'desc')->paginate(10); //carico solo 5 posts 

        return view('home', compact('posts'));
    }
}