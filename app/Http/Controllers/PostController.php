<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "All about",
            "about" => Post::with(['category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
{
    return view('post', [
    "title" => "Single post", 
    "post" => $post
]);
}
}
