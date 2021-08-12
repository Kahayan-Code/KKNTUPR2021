<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', ['posts' => $posts]);
    }
    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:150',
            'body' => 'required',
        ]);

        $input = $request->all();

        $post = Post::create($input);

        return back()->with('success', ' Post baru berhasil dibuat.');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
