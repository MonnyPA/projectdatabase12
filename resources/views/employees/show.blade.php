        @extends('layouts.dashboard')

        @section('content')


        <div class="page-header">
              <h3 class="fw-bold mb-3">Detail Employee</h3>
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
                  <a href="#">Detail</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title text-center">Detail Employee</div>
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
                            <label for="">Fullname :</label>
                            <p>{{ Str::ucfirst($employee->fullname) }}</p>
                            </div>
                            <div>
                            <label for="">Email :</label>
                            <p>{{ $employee->email }}</p>
                            </div>
                            <div>
                            <label for="">NIK :</label>
                            <p>{{ $employee->nik }}</p>
                            </div>
                            <div>
                            <label for="">Phone Number :</label>
                            <p>{{ $employee->phone_number }}</p>
                            </div>
                            <div>
                            <label for="">Birth Date :</label>
                            <p>{{ \Carbon\Carbon::parse($employee->birth_date)->format('d F Y') }}</p>
                            </div>
                            <div>
                            <label for="">Hire Date :</label>
                            <p>{{ \Carbon\Carbon::parse($employee->hire_date)->format('d F Y') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                            <label for="">ID Akun IEPMS :</label>
                            <p>{{ $employee->id_akun_iepms }}</p>
                            </div>
                            <div>
                            <label for="">Nomor Sertifikat WAH :</label>
                            <p>{{ $employee->ser_wah }}</p>
                            </div>
                            <div>
                            <label for="">Nomor Sertifikat First AID :</label>
                            <p>{{ $employee->ser_first_aid }}</p>
                            </div>
                            <div>
                            <label for="">Nomor Sertifikat Electrikal :</label>
                            <p>{{ $employee->ser_electrikal }}</p>
                            </div>
                            <div>
                            <label for="">Status Employee :</label>
                            <p>{{ Str::ucfirst($employee->status_employee) }}</p>
                            </div>
                            <div>
                            <label for="">Jabatan :</label>
                            <p>{{ Str::ucfirst($employee->role->title) }}</p>
                            </div>
                            <div>
                            <label for="">Department :</label>
                            <p>{{ Str::ucfirst($employee->department->title) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                    @if(in_array(session('role'), ['pemegang_saham','pemilik','admin','manager']))
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                    </form>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info btn-sm">Edit</a>
                    @endif
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>

        @endsection
