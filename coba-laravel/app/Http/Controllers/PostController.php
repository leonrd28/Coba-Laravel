<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "posts",
            "posts" =>  Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
