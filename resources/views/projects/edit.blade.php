        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
              <h3 class="fw-bold mb-3">Update Project</h3>
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
                  <a href="#">Update</a>
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

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ route('projects.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                            <div class="form-group form-inline">
                                <label
                                for="site_id"
                                class="col-md-3 col-form-label"
                                >Site ID :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="site_id"
                                    placeholder="Silahkan masukan Site_ID"
                                    name="site_id"
                                    value="{{ old('site_id', $project->site_id) }}"
                                    required
                                />
                                @error('site_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="site_name"
                                class="col-md-3 col-form-label"
                                >Site Name :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="site_name"
                                    placeholder="Silahkan masukan Site_name"
                                    name="site_name"
                                    value="{{ old('site_name', $project->site_name) }}"
                                    required
                                />
                                @error('site_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="lattitude"
                                class="col-md-3 col-form-label"
                                >Lattitude :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="lattitude"
                                    placeholder="Silahkan masukan Lattitude"
                                    name="lattitude"
                                    value="{{ old('lattitude', $project->lattitude) }}"
                                />
                                @error('lattitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="longitude"
                                class="col-md-3 col-form-label"
                                >Longitude :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="longitude"
                                    placeholder="Silahkan masukan Longitude"
                                    name="longitude"
                                    value="{{ old('longitude', $project->longitude) }}"
                                />
                                @error('longitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="foto_ba_outbound"
                                >Upload BA Outbound</label
                            >
                            <input
                                type="file"
                                class="form-control-file"
                                id="foto_ba_outbound"
                                name="foto_ba_outbound"
                                value="{{ old('foto_ba_outboud', $project->foto_ba_outbound) }}"
                            />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
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
                                    <option value="{{ $sow->id }}"
                                        @if(old('sow_id', $sow->id) == $sow->id) selected
                                        @endif>
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
                                    value="{{ old('assign_date', $project->assign_date) }}"
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
                                    <option value="{{ $employee->id }}"
                                        @if(old('employee_id', $employee->id) == $employee->id)
                                        selected
                                        @endif>
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
                                <option value="permit_request"
                                @if(old('progress', $project->progress) == 'permit_request')
                                selected
                                @endif>
                                Permit Request</option>
                                <option value="permit_release"
                                @if(old('progress', $project->progress) == 'permit_release')
                                selected
                                @endif>
                                Permit Release</option>
                                <option value="action_og"
                                @if(old('progress', $project->progress) == 'action_og')
                                selected
                                @endif>Action OG</option>
                                <option value="action_done"
                                @if(old('progress', $project->progress) == 'action_done')
                                selected
                                @endif>Action Done</option>
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
                                value="{{ old('foto_ba_inbound', $project->foto_ba_inbound) }}"
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
                                    value="{{ old('permit_start_date', $project->permit_start_date) }}"
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
                                    value="{{ old('permit_end_date', $project->permit_end_date) }}"
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
                                    value="{{ old('start_action_date', $project->start_action_date) }}"
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
                                    value="{{ old('end_action_date', $project->end_action_date) }}"
                                />
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                        <button type="submit" class="btn btn-success">Update Project</button>
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
