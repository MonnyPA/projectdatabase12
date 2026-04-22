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
        $departments = Department::all();
        $roles = Role::all();

        if(in_array(session('role'), ['pemegang_saham','pemilik'])) {
            $employees = Employee::all();
        } else {
            $employees = Employee::where('id', session('employee_id'))->get();
        }

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

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $roles = Role::all();
        return view('employees.edit', compact('departments', 'employee', 'roles'));
    }

    public function update(Request $request, Employee $employee)
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

        // Jika berhasil validasi, maka update data

        $employee->update($validate);

        return redirect()->route('employees.index')->with('success', 'Employee atas nama : ' . $validate['fullname'] . ', updated successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee atas nama : ' . $employee->fullname . ' deleted successfully.');
    }
}
