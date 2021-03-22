<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $postsFromDB = Post::all();
        // dd($postsFromDB);
        return view('posts.index', [
            'posts' => $postsFromDB
        ]);
    }

    public function show($postId)
    {
        // $post = ['id' => 1, 'title' => 'laravel', 'description' => 'laravel is awsome framework', 'posted_by' => 'Mostafa', 'email' => 'mostafa@gmail.com', 'created_at' => '2021-03-20'];
        $singlePost = Post::find($postId);
        return view('posts.show', [
            'post' => $singlePost,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return redirect()->route('posts.index');
    }

    public function update()
    {
        return view('posts.update');
    }
}
