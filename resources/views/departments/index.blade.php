        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
            <h3 class="fw-bold mb-3">Departments</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ url('/dashboard') }}">
                    <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Departments</a>
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
                    <h4 class="card-title">List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="mb-3 text-end me-3">
                            @if(in_array(session('role'), ['pemegang_saham','pemilik']))
                            <a href="{{ route('departments.create') }}" class="btn btn-primary btn-round">Add New Department</a>
                            @endif
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
                            <th class="text-center" style="width: 5px;">No</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Description</th>
                            @if(in_array(session('role'), ['pemegang_saham','pemilik']))
                            <th class="text-center">Action</th>
                            @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                            <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ Str::ucfirst($department->title) }}</td>
                            <td class="text-center">{{ $department->description }}</td>
                            @if(in_array(session('role'), ['pemegang_saham','pemilik']))
                            <td class="text-center">
                                <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('departments.destroy', $department->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Department?')">Delete</button>
                                </form>
                            </td>
                            @endif
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
