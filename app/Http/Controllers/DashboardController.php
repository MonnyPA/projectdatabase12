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
        $sow = Sow::count();
        $department = Department::count();
        $role = Role::count();


        if(in_array(session('role'), ['pemegang_saham','pemilik'])) {
            $projects = Project::all();
            $totalProjects = Project::count();
            $actionDone = Project::where('progress', 'action_done')->count();
            $permitRequest = Project::where('progress', 'permit_request')->count();
            $actionOg = Project::where('progress', 'action_og')->count();
        } else {
            $projects = Project::where('employee_id', session('employee_id'))->get();
            $totalProjects = Project::where('employee_id', session('employee_id'))->count();
            $actionDone = Project::where('progress', 'action_done')->where('employee_id', session('employee_id'))->count();
            $permitRequest = Project::where('progress', 'permit_request')->where('employee_id', session('employee_id'))->count();
            $actionOg = Project::where('progress', 'action_og')->where('employee_id', session('employee_id'))->count();
        }

        return view('dashboard.index', compact('employee','totalProjects','projects','sow','department','role','actionDone','permitRequest','actionOg'));
    }

    public function project()
    {
        $data = Project::where('progress', 'action_done')
        ->selectRaw('MONTH(assign_date) as month, YEAR(assign_date) as year, COUNT(*) as total_project')
        ->groupBy( 'year', 'month')
        ->orderBy('month', 'asc')
        ->get();

        $temp = [];
        $i = 0;
        foreach ($data as $item) {
            $temp[$i] = $item->total_project;
            $i++;
    }

        return response()->json($temp);
    }
}
