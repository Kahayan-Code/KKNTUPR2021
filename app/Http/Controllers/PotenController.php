<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Potency;

class PotenController extends Controller
{
    public function index()
    {
        $potencys = Potency::latest()->paginate(5);

        return view('admin.potency.index', compact('potencys'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('admin.potency.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $input = $request->all();

        $potency = Potency::create($input);
        return redirect()->route('potens.index')
            ->with('success', 'Product created successfully.');
    }
    public function show(Potency $potency)
    {
        return view('admin.potency.show', compact('potency'));
    }
    public function edit(Potency $potency)
    {
        return view('admin.potency.edit', compact('potency'));
    }
    public function update(Request $request, Potency $potency)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $input = $request->all();

        $potency->update($input);

        return redirect()->route('potens.index')
            ->with('success', 'Post updated successfully');
    }
    public function destroy(Potency $potency)
    {
        $potency->delete();

        return redirect()->route('potens.index')
            ->with('success', 'Post deleted successfully');
    }
}
