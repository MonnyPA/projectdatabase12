        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
              <h3 class="fw-bold mb-3">Create New SOW</h3>
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
                  <a href="#">SOW</a>
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
                    <form action="{{ route('sows.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                            <div class="form-group form-inline">
                                <label
                                for="title"
                                class="col-md-3 col-form-label"
                                >Name SOW :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="title"
                                    placeholder="Silahkan masukan Nama SOW"
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
                                >Description SOW :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="descrioption"
                                    placeholder="Silahkan masukan Description SOW"
                                    name="description"
                                    required
                                />
                                @error('site_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6 col-lg-4">
                            <div class="form-group form-inline">
                                <label
                                for="sow_id"
                                class="col-md-3 col-form-label"
                                >SOW :</label
                                >
                                <div class="col-md-9 p-0">
                                <select name="sow_id" id="sow_id" class="form-control @error('sow_id') is-invalid @enderror" required>
                                <option value="">Select a SOW</option>
                                @foreach($sows as $sow)
                                    <option value="{{ $sow->id }}" {{ old('sow_id') == $sow->id ? 'selected' : '' }}>
                                        {{ $sow->title }}
                                    </option>
                                @endforeach
                                @error('sow_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </select>
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="assign_date"
                                class="col-md-3 col-form-label"
                                >Assign Date :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="date-local"
                                    class="form-control date"
                                    id="assign_date"
                                    placeholder="Silahkan masukan tanggal assign"
                                    name="assign_date"
                                />
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="employee_id"
                                class="col-md-3 col-form-label"
                                >Team :</label
                                >
                                <div class="col-md-9 p-0">
                                <select name="employee_id" id="employee_id" class="form-control @error('employee_id') is-invalid @enderror" required>
                                <option value="">Select an Employee</option>
                                @foreach($employees as $employee)
                                    <option value="{{ $employee->id }}" {{ old('employee_id') == $employee->id ? 'selected' : '' }}>
                                        {{ $employee->fullname }}
                                    </option>
                                @endforeach
                                @error('employee_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </select>
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="progress"
                                class="col-md-3 col-form-label"
                                >Progress :</label>
                                <div class="col-md-9 p-0">
                                <select name="progress" id="progress" class="form-control @error('progress') is-invalid @enderror" required>
                                <option value="">Select Progress</option>
                                <option value="permit_request" {{ @old('progress') == 'permit_request' ? 'selected' : '' }}>Permit Request</option>
                                <option value="permit_release" {{ @old('progress') == 'permit_release' ? 'selected' : '' }}>Permit Release</option>
                                <option value="action_og" {{ @old('progress') == 'action_og' ? 'selected' : '' }}>Action OG</option>
                                <option value="action_done" {{ @old('progress') == 'action_done' ? 'selected' : '' }}>Action Done</option>
                            </select>
                            @error('progress')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="foto_ba_inbound"
                                >Upload BA Inbound</label
                            >
                            <input
                                type="file"
                                class="form-control-file"
                                id="foto_ba_inbound"
                                name="foto_ba_inbound"
                            />
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group form-inline">
                                <label
                                for="permit_start_date"
                                class="col-md-3 col-form-label"
                                >Permit Start Date :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="date-local"
                                    class="form-control date"
                                    id="permit_start_date"
                                    placeholder="Silahkan masukan tanggal start permit"
                                    name="permit_start_date"
                                />
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="permit_end_date"
                                class="col-md-3 col-form-label"
                                >Permit End Date :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="date-local"
                                    class="form-control date"
                                    id="permit_end_date"
                                    placeholder="Silahkan masukan tanggal end permit"
                                    name="permit_end_date"
                                />
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="start_action_date"
                                class="col-md-3 col-form-label"
                                >Action Start Date :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="date-local"
                                    class="form-control date"
                                    id="start_action_date"
                                    placeholder="Silahkan masukan tanggal start Action"
                                    name="start_action_date"
                                />
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="end_action_date"
                                class="col-md-3 col-form-label"
                                >Action end Date :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="date-local"
                                    class="form-control date"
                                    id="end_action_date"
                                    placeholder="Silahkan masukan tanggal end Action"
                                    name="end_action_date"
                                />
                                </div>
                            </div>
                        </div> --}}
                        <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('projects.index') }}" class="btn btn-danger">Cancel</a>
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
