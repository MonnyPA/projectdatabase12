<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sows', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('nik');
            $table->string('phone_number');
            $table->string('birth_date');
            $table->string('hire_date');
            $table->string('id_akun_iepms');
            $table->string('ser_wah');
            $table->string('ser_first_aid');
            $table->string('ser_electrikal');
            $table->string('status_employee');
            $table->foreignId('role_id')->constrained('roles');
            $table->foreignId('department_id')->constrained('departments');
            $table->string('foto_ktp');
            $table->string('foto_selfie');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('site_id')->unique();
            $table->string('site_name');
            $table->string('lattitude');
            $table->string('longitude');
            $table->foreignId('sow_id')->constrained('sows');
            $table->date('assign_date');
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('progress');
            $table->date('permit_start_date');
            $table->date('permit_end_date');
            $table->date('start_action_date');
            $table->date('end_action_date');
            $table->string('foto_ba_outbound');
            $table->string('foto_ba_inbound');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sows');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('projects');
    }
};
