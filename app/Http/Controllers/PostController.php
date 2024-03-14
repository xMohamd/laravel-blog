<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Fetch all posts from the database
        return view('posts.index', compact('posts')); // Pass the $posts variable to the view
    }

    public function create()
    {
        return view('posts.create')->with('msg', 'Show the form for creating a new resource');
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }


    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
    public function trash()
    {
        $dPosts = Post::onlyTrashed()->get();
        return view('posts.trash', ['dPosts' => $dPosts]);
    }
}
