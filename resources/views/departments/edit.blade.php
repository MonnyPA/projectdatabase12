        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
              <h3 class="fw-bold mb-3">Update Department</h3>
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
                  <a href="#">Department</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Update</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form</div>
                    </div>
                    <div class="card-body">

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ route('departments.update', $department->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                            <div class="form-group form-inline">
                                <label
                                for="title"
                                class="col-md-3 col-form-label"
                                >Name Department :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="title"
                                    placeholder="Silahkan masukan Nama SOW"
                                    name="title"
                                    value="{{ old('title', $department->title) }}"
                                    required
                                />
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="description"
                                class="col-md-3 col-form-label"
                                >Description Department :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="description"
                                    placeholder="Silahkan masukan Description SOW"
                                    name="description"
                                    value="{{ old('description', $department->description) }}"
                                    required
                                />
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                        <button type="submit" class="btn btn-success">Update Department</button>
                        <a href="{{ route('departments.index') }}" class="btn btn-danger">Cancel</a>
                        {{-- <button class="btn btn-danger">Cancel</button> --}}
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>

        @endsection
