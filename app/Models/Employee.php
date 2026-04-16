<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'fullname',
        'email',
        'nik',
        'phone_number',
        'birth_date',
        'hire_date',
        'id_akun_iepms',
        'ser_wah',
        'ser_first_aid',
        'ser_electrikal',
        'status_employee',
        'role_id',
        'department_id',
        'foto_ktp',
        'foto_selfie'
    ];
}
