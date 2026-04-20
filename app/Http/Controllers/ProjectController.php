<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Sow;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $employees = Employee::all();
        $sows = Sow::all();
        return view('projects.create', compact('employees', 'sows'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'site_id' => 'required|string',
            'site_name' => 'required|string',
            'lattitude' => 'required|string',
            'longitude' => 'required|string',
            'sow_id' => 'required',
            'assign_date' => 'required|date',
            'employee_id' => 'required',
            'progress' => 'required',
            'permit_start_date' => 'nullable|date',
            'permit_end_date' => 'nullable|date',
            'start_action_date' => 'nullable|date',
            'end_action_date' => 'nullable|date',
            'foto_ba_outbound' => 'nullable|string',
            'foto_ba_inbound' => 'nullable|string',
        ]);

        // Jika berhasil

        Project::create($validate);

        return redirect()->route('projects.index')->with('success', 'Project Site ID : ' . $validate['site_id'] . ', created successfully.');
    }

    public function edit(Project $project)
    {
        $employees = Employee::all();
        $sows = Sow::all();
        return view('projects.edit', compact('project', 'employees', 'sows'));
    }

    public function update(Request $request, Project $project)
    {
        $validate = $request->validate([
            'site_id' => 'required|string',
            'site_name' => 'required|string',
            'lattitude' => 'required|string',
            'longitude' => 'required|string',
            'sow_id' => 'required',
            'assign_date' => 'required|date',
            'employee_id' => 'required',
            'progress' => 'required',
            'permit_start_date' => 'nullable|date',
            'permit_end_date' => 'nullable|date',
            'start_action_date' => 'nullable|date',
            'end_action_date' => 'nullable|date',
            'foto_ba_outbound' => 'nullable|string',
            'foto_ba_inbound' => 'nullable|string',
        ]);

        // Jika berhasil validasi, maka update data

        $project->update($validate);

        return redirect()->route('projects.index')->with('success', 'Project Site ID : ' . $validate['site_id'] . ', updated successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project ' . $project->site_id . ' deleted successfully.');
    }
}
