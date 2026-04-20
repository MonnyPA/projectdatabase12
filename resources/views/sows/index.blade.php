        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
            <h3 class="fw-bold mb-3">Data SOW</h3>
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
                    <a href="#">SOWs</a>
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
                            <a href="{{ route('sows.create') }}" class="btn btn-primary btn-round">Add New SOW</a>
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
                            <th class="text-center">Title</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sows as $sow)
                            <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ Str::ucfirst($sow->title) }}</td>
                            <td class="text-center">{{ $sow->description }}</td>
                            <td class="text-center">
                                <a href="{{ route('sows.edit', $sow->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('sows.destroy', $sow->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this SOW?')">Delete</button>
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
