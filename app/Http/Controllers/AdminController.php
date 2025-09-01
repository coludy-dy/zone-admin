<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function show()
    {
        $admin = auth()->guard('admin')->user();
        return view('admins.show', compact('admin'));
    }

    // Laravel automatically injects the Admin model
    public function edit(Admin $admin)
    {
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'login_name' => 'required|string|max:255|unique:admins,login_name,' . $admin->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        // Assign new values
        $admin->name = $request->name;
        $admin->login_name = $request->login_name;

        // Update password only if provided
        if ($request->password) {
            $admin->password = Hash::make($request->password);
        }

        // Save changes
        $admin->save();

        return redirect()->route('admin.profile.show')->with('success', 'Profile updated successfully.');
    }
}