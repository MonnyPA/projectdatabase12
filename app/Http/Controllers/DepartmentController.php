<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        // Jika berhasil

        Department::create($validate);

        return redirect()->route('departments.index')->with('success', 'Department : ' . $validate['title'] . ', created successfully.');
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        // Jika berhasil validasi, maka update data

        $department->update($validate);

        return redirect()->route('departments.index')->with('success', 'Department : ' . $validate['title'] . ', updated successfully.');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Department : ' . $department->title . ', Deleted successfully.');
    }
}
