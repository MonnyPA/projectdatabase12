<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        // Jika berhasil

        Role::create($validate);

        return redirect()->route('roles.index')->with('success', 'Role : ' . $validate['title'] . ', created successfully.');
    }

    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        // Jika berhasil validasi, maka update data

        $role->update($validate);

        return redirect()->route('roles.index')->with('success', 'Role : ' . $validate['title'] . ', updated successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role : ' . $role->title . ', Deleted successfully.');
    }
}
