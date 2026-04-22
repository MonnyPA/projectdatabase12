<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Sow;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $employee = Employee::count();
        $totalProjects = Project::count();
        $projects = Project::all();
        $sow = Sow::count();
        $department = Department::count();
        $role = Role::count();
        $actionDone = Project::where('progress', 'action_done')->count();
        $permitRequest = Project::where('progress', 'permit_request')->count();
        $actionOg = Project::where('progress', 'action_og')->count();

        return view('dashboard.index', compact('employee','totalProjects','projects','sow','department','role','actionDone','permitRequest','actionOg'));
    }
}
