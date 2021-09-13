<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->paginate(5);

        return view('admin.tag.index', compact('tags'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('admin.tag.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $input = $request->all();

        $tag = Tag::create($input);
        return redirect()->route('tags.index')
            ->with('success', 'Product created successfully.');
    }
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $input = $request->all();
        $tag->update($input);

        return redirect()->route('tags.index')
            ->with('success', 'Post updated successfully');
    }
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')
            ->with('success', 'Post deleted successfully');
    }
}
