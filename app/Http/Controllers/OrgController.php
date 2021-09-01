<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrganizationStructure;

class OrgController extends Controller
{
    public function index()
    {
        // $organizationstructures = OrganizationStructure::all();
        // return view('admin.post.index', ['posts' => $posts]);
        $organizationstructures = OrganizationStructure::latest()->paginate(5);
        return view('admin.organizationstructure.index', compact('organizationstructures'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('admin.organizationstructure.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        OrganizationStructure::create($input);
        return redirect()->route('orgs.index')
            ->with('success', 'Product created successfully.');
    }
    public function edit(OrganizationStructure $organizationstructure)
    {
        return view('admin.organizationstructure.edit', compact('organizationstructure'));
    }
    public function update(Request $request, OrganizationStructure $organizationstructure)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
        $organizationstructure->update($input);
        return redirect()->route('orgs.index')
            ->with('success', 'organizationstructure updated successfully');
    }
    public function destroy(OrganizationStructure $organizationstructure)
    {
        $organizationstructure->delete();
        return redirect()->route('orgs.index')
            ->with('success', 'organizationstructure deleted successfully');
    }
}
