<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1, 'title' => 'laravel', 'posted_by' => 'Mostafa', 'created_at' => '2021-03-20'],
            ['id' => 2, 'title' => 'PHP', 'posted_by' => 'Mahmoud', 'created_at' => '2021-03-21'],
            ['id' => 3, 'title' => 'JS', 'posted_by' => 'Ali', 'created_at' => '2021-03-22'],
        ];
        return view('posts.index', [
            'posts' => $allPosts
        ]);
    }

    public function show($postId)
    {
        $post = ['id' => 1, 'title' => 'laravel', 'description' => 'laravel is awsome framework', 'posted_by' => 'Mostafa', 'email' => 'mostafa@gmail.com', 'created_at' => '2021-03-20'];
        return view('posts.show', [
            'post' => $post,
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
