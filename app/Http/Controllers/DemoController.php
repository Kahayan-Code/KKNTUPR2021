<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demography;

class DemoController extends Controller
{
    public function index()
    {
        $demographys = Demography::latest()->paginate(5);
        return view('admin.demography.index', compact('demographys'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('admin.demography.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $input = $request->all();

        $demography = Demography::create($input);
        return redirect()->route('demos.index')
            ->with('success', 'Product created successfully.');
    }
    public function edit(demography $demography)
    {
        return view('admin.demography.edit', compact('demography'));
    }
    public function update(Request $request, demography $demography)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $input = $request->all();
        $demography->update($input);

        return redirect()->route('demos.index')
            ->with('success', 'Post updated successfully');
    }
    public function destroy(demography $demography)
    {
        $demography->delete();

        return redirect()->route('demos.index')
            ->with('success', 'Post deleted successfully');
    }
}
