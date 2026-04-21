        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
            <h3 class="fw-bold mb-3">Employees</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                    <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Employees</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Index</a>
                </li>
                </ul>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Data Employee</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="mb-3 text-end me-3">
                            <a href="{{ route('employees.create') }}" class="btn btn-primary btn-round">Add New Employee</a>
                        </div>

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"">
                        {{ session('success') }}
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" style="font-size: 0.7rem;"></button>
                    </div>
                    @endif

                    <table
                        id="basic-datatables"
                        class="display table table-striped table-hover"
                        >
                        <thead>
                            <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Full Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Birth Date</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Department</th>
                            <th class="text-center">Hire Date</th>
                            <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $employee->fullname }}</td>
                            <td class="text-center">{{ $employee->email }}</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($employee->birth_date)->format('d F Y') }}</td>
                            <td class="text-center">{{ Str::ucfirst($employee->role->title) }}</td>
                            <td class="text-center">{{ Str::ucfirst($employee->department->title) }}</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($employee->hire_date)->format('d F Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Project?')">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>


        @endsection
