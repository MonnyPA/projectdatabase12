        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
              <h3 class="fw-bold mb-3">Update Data Employee</h3>
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
                  <a href="#">Employee</a>
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
                    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')

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
                                    value="{{ old('fullname', $employee->fullname) }}"
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
                                    value="{{ old('email', $employee->email) }}"
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
                                    value="{{ old('nik', $employee->nik) }}"
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
                                    value="{{ old('phone_number', $employee->phone_number) }}"
                                    required
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
                                    value="{{ old('birth_date', $employee->birth_date) }}"
                                    required
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
                                    value="{{ old('id_akun_iepms', $employee->id_akun_iepms) }}"
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
                                    value="{{ old('hire_date', $employee->hire_date) }}"
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
                                    value="{{ old('ser_wah', $employee->ser_wah) }}"
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
                                    value="{{ old('ser_first_aid', $employee->ser_first_aid) }}"
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
                                    value="{{ old('ser_electrikal', $employee->ser_electrikal) }}"
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
                                <option value="internal"
                                    @if(old('status_employee', $employee->status_employee) == 'internal')
                                    selected
                                    @endif>
                                    Internal
                                </option>
                                <option value="external"
                                    @if(old('status_employee', $employee->status_employee) == 'external')
                                    selected
                                    @endif>
                                    External
                                </option>
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
                                    <option value="{{ $role->id }}"
                                        @if(old('role_id', $role->id) == $role->id) selected
                                        @endif>
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
                                    <option value="{{ $department->id }}"
                                        @if(old('department_id', $department->id) == $department->id)
                                        selected
                                        @endif>
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
                                value="{{ old('foto_ktp', $employee->foto_ktp) }}"
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
                                value="{{ old('foto_selfie', $employee->foto_selfie) }}"
                            />
                            </div>

                        </div>
                        <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('employees.index') }}" class="btn btn-danger">Cancel</a>
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
