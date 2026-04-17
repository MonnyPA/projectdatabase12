        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Project</h3>
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
                    <a href="#">Projects</a>
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
                    <h4 class="card-title">List Project</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="mb-3 text-end me-3">
                            <a href="{{ route('projects.create') }}" class="btn btn-primary btn-round">Add New Project</a>
                        </div>
                    <table
                        id="basic-datatables"
                        class="display table table-striped table-hover"
                        >
                        <thead>
                            <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Site ID</th>
                            <th class="text-center">Site Name</th>
                            <th class="text-center">SOW</th>
                            <th class="text-center">Assign Date</th>
                            <th class="text-center">Progress</th>
                            <th class="text-center">Team</th>
                            <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $project->site_id }}</td>
                            <td class="text-center">{{ $project->site_name }}</td>
                            <td class="text-center">{{ $project->sow->title }}</td>
                            <td class="text-center">{{ $project->assign_date }}</td>
                            <td class="text-center">{{ $project->progress }}</td>
                            <td class="text-center">{{ $project->employee->fullname }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
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
