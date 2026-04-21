        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
            <h3 class="fw-bold mb-3">Project</h3>
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
                            <td class="text-center">{{ Str::ucfirst($project->sow->title) }}</td>
                            <td class="text-center">{{ $project->assign_date }}</td>
                            <td class="text-center">{{ Str::ucfirst($project->progress) }}</td>
                            <td class="text-center">{{ $project->employee?->fullname ?? 'Tidak ada employee' }}</td>
                            <td class="text-center">
                                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
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
