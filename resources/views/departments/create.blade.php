        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
              <h3 class="fw-bold mb-3">Create New Department</h3>
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
                  <a href="#">Department</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Create</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Input</div>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf

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
                                    placeholder="Silahkan masukan Nama Department"
                                    name="title"
                                    required
                                />
                                @error('site_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="descrioption"
                                class="col-md-3 col-form-label"
                                >Description Department :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="descrioption"
                                    placeholder="Silahkan masukan Descrip. Department"
                                    name="description"
                                    required
                                />
                                @error('site_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
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
