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

    public function create()
    {
        $departments = Department::all();
        $roles = Role::all();
        return view('employees.create', compact('departments', 'roles'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|string',
            'nik' => 'required|string',
            'phone_number' => 'required|string',
            'birth_date' => 'required|date',
            'hire_date' => 'required|date',
            'id_akun_iepms' => 'required|string',
            'ser_wah' => 'required|string',
            'ser_first_aid' => 'required|string',
            'ser_electrikal' => 'required|string',
            'status_employee' => 'required|string',
            'role_id' => 'required|string',
            'department_id' => 'required|string',
            'foto_ktp' => 'required|string',
            'foto_selfie' => 'required|string',
        ]);

        // Jika berhasil

        Employee::create($validate);

        return redirect()->route('employees.index')->with('success', 'Employee atas nama : ' . $validate['fullname'] . ', created successfully.');
    }
}
