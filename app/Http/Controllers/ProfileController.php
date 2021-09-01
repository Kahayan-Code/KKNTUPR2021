<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show(profile $profile)
    {
        return view('admin.profile.show', compact('profile'));
    }

    public function edit(profile $profile)
    {
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request, profile $profile)
    {
        $request->validate([
            'history' => 'required',
            'vision' => 'required',
            'mission' => 'required'
        ]);

        $input = $request->all();

        $profile->update($input);

        return redirect()->route('profiles.show', "1")
            ->with('success', 'Post updated successfully');
    }

    public function destroy(profile $profile)
    {
        $profile->delete();

        return redirect()->route('profiles.show', "1")
            ->with('success', 'Post deleted successfully');
    }
}
