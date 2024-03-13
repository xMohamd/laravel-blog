<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['msg' => 'Display a listing of the resource.']);
    }

    public function create()
    {
        return view('posts.create', ['msg' => 'Show the form for creating a new resource']);
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
        return view('posts.show', ['msg' => 'Display the resource with id', 'id' => $id]);
    }


    public function edit(string $id)
    {
        return view('posts.edit', ['msg' => 'Update the resource with id', 'id' => $id]);
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
