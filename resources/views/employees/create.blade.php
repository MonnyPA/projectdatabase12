        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
              <h3 class="fw-bold mb-3">Create New Employee</h3>
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
                  <a href="#">Employee</a>
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
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                            <div class="form-group form-inline">
                                <label
                                for="fullname"
                                class="col-md-3 col-form-label"
                                >Full Name :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="fullname"
                                    placeholder="Silahkan masukan Nama Employee"
                                    name="fullname"
                                    required
                                />
                                @error('fullname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="email"
                                class="col-md-3 col-form-label"
                                >Email :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    placeholder="Silahkan masukan Email"
                                    name="email"
                                    required
                                />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="nik"
                                class="col-md-3 col-form-label"
                                >NIK :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nik"
                                    placeholder="Silahkan masukan Nama Employee"
                                    name="nik"
                                    required
                                />
                                @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="phone_number"
                                class="col-md-3 col-form-label"
                                >Phone Number :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="phone_number"
                                    placeholder="Silahkan masukan phone_number"
                                    name="phone_number"
                                />
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="birth_date"
                                class="col-md-3 col-form-label"
                                >Birth Date :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control date"
                                    id="birth_date"
                                    placeholder="Silahkan masukan Longitude"
                                    name="birth_date"
                                />
                                @error('birth_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="id_akun_iepms"
                                class="col-md-3 col-form-label"
                                >ID Akun IEPMS :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="id_akun_iepms"
                                    placeholder="Silahkan masukan Nama Employee"
                                    name="id_akun_iepms"
                                    required
                                />
                                @error('id_akun_iepms')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="hire_date"
                                class="col-md-3 col-form-label"
                                >Hire Date :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control date"
                                    id="hire_date"
                                    placeholder="Silahkan masukan Nama Employee"
                                    name="hire_date"
                                    required
                                />
                                @error('hire_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group form-inline">
                                <label
                                for="ser_wah"
                                class="col-md-3 col-form-label"
                                >Nomor Sertifikat WAH :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="ser_wah"
                                    placeholder="Silahkan masukan Nama Employee"
                                    name="ser_wah"
                                    required
                                />
                                @error('ser_wah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="ser_first_aid"
                                class="col-md-3 col-form-label"
                                >Nomor Sertifikat First Aid :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="ser_first_aid"
                                    placeholder="Silahkan masukan Nama Employee"
                                    name="ser_first_aid"
                                    required
                                />
                                @error('ser_first_aid')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="ser_electrikal"
                                class="col-md-3 col-form-label"
                                >Nomor Sertifikat Electrikal :</label
                                >
                                <div class="col-md-9 p-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="ser_electrikal"
                                    placeholder="Silahkan masukan Nama Employee"
                                    name="ser_electrikal"
                                    required
                                />
                                @error('ser_electrikal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="status_employee"
                                class="col-md-3 col-form-label"
                                >Status Employee :</label>
                                <div class="col-md-9 p-0">
                                <select name="status_employee" id="status_employee" class="form-control @error('status_employee') is-invalid @enderror" required>
                                <option value="">Select Status Employee</option>
                                <option value="internal" {{ @old('status_employee') == 'internal' ? 'selected' : '' }}>Internal</option>
                                <option value="external" {{ @old('status_employee') == 'External' ? 'selected' : '' }}>External</option>
                            </select>
                            @error('status_employee')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="role_id"
                                class="col-md-3 col-form-label"
                                >Jabatan :</label
                                >
                                <div class="col-md-9 p-0">
                                <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror" required>
                                <option value="">Select Jabatan</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                        {{ $role->title }}
                                    </option>
                                @endforeach
                                @error('role_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </select>
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label
                                for="department_id"
                                class="col-md-3 col-form-label"
                                >Department :</label
                                >
                                <div class="col-md-9 p-0">
                                <select name="department_id" id="department_id" class="form-control @error('department_id') is-invalid @enderror" required>
                                <option value="">Select a Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                        {{ $department->title }}
                                    </option>
                                @endforeach
                                @error('department_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                            <label for="foto_ktp"
                                >Upload Foto KTP</label
                            >
                            <input
                                type="file"
                                class="form-control-file"
                                id="foto_ktp"
                                name="foto_ktp"
                            />
                            </div>
                            <div class="form-group">
                            <label for="foto_selfie"
                                >Upload Foto Selfie</label
                            >
                            <input
                                type="file"
                                class="form-control-file"
                                id="foto_selfie"
                                name="foto_selfie"
                            />
                            </div>

                        </div>
                        <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="#" class="btn btn-danger">Cancel</a>
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
