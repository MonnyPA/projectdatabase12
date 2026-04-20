        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
              <h3 class="fw-bold mb-3">Detail Project</h3>
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
                  <a href="#">Project</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Detail</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title text-center">Detail Site</div>
                    </div>
                    <div class="card-body">

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-5">
                            <div>
                            <label for="">Site ID :</label>
                            <p>{{ $project->site_id }}</p>
                            </div>
                            <div>
                            <label for="">Lattitude :</label>
                            <p>{{ $project->lattitude }}</p>
                            </div>
                            <div>
                            <label for="">SOW :</label>
                            <p>{{ ucfirst($project->sow->title) }}</p>
                            </div>
                            <div>
                            <label for="">Progress :</label>
                            <p>{{ ucfirst($project->progress) }}</p>
                            </div>
                            <div>
                            <label for="">Permit Start Date :</label>
                            <p>{{ \Carbon\Carbon::parse($project->permit_start_date)->format('d F Y') }}</p>
                            </div>
                            <div>
                            <label for="">Start Action Date :</label>
                            <p>{{ \Carbon\Carbon::parse($project->start_action_date)->format('d F Y') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                            <label for="">Site Name :</label>
                            <p>{{ $project->site_name }}</p>
                            </div>
                            <div>
                            <label for="">Longitude :</label>
                            <p>{{ $project->longitude }}</p>
                            </div>
                            <div>
                            <label for="">Assign Date :</label>
                            <p>{{ \Carbon\Carbon::parse($project->assign_date)->format('d F Y') }}</p>
                            </div>
                            <div>
                            <label for="">Team Eksekutor :</label>
                            <p>{{ $project->employee->fullname }}</p>
                            </div>
                            <div>
                            <label for="">Permit End Date :</label>
                            <p>{{ \Carbon\Carbon::parse($project->permit_end_date)->format('d F Y') }}</p>
                            </div>
                            <div>
                            <label for="">End Action Date :</label>
                            <p>{{ \Carbon\Carbon::parse($project->end_action_date)->format('d F Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                    <form action="#" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                    </form>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="{{ route('projects.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>

        @endsection
