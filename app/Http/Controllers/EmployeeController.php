<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Employee;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $departments = Department::all();
        $roles = Role::all();
        return view('employees.index', compact('employees','roles','departments'));
    }
}
