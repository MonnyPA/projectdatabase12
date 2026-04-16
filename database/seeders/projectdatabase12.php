<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;


class projectdatabase12 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('roles')->insert([
            [
                'title' => 'admin',
                'description' => 'Administrator',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'karyawan',
                'description' => 'Karyawan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'pemilik',
                'description' => 'Pemilik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'manager',
                'description' => 'Manager',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'koordinator',
                'description' => 'Koordinator',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);

        DB::table('departments')->insert([
            [
                'title' => 'back_office',
                'description' => 'Back Office',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'installer',
                'description' => 'Installer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'dismantle',
                'description' => 'Dismantle',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        DB::table('sows')->insert([
            [
                'title' => 'mocn',
                'description' => 'MOCN',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => '5G',
                'description' => '5G',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'dismantle_drop',
                'description' => 'Dismantle Drop',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'dismantle_mw',
                'description' => 'Dismantle MW',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('employees')->insert([
            [
                'fullname' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'nik' => $faker->numberBetween(1000000000000000, 9999999999999999),
                'phone_number' => $faker->phoneNumber(),
                'birth_date' => $faker->dateTimeInInterval('-30 years', '-20 years')->format('Y-m-d'),
                'hire_date' => Carbon::now(),
                'id_akun_iepms' => $faker->numberBetween(100000, 999999),
                'ser_wah' => $faker->numberBetween(1000000000000, 9999999999999),
                'ser_first_aid' => $faker->numberBetween(1000000000000, 9999999999999),
                'ser_electrikal' => $faker->numberBetween(1000000000000, 9999999999999),
                'status_employee' => 'internal',
                'role_id' => '2',
                'department_id' => '1',
                'foto_ktp' => 'product/ktp.jpg',
                'foto_selfie' => 'product/selfie.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'fullname' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'nik' => $faker->numberBetween(1000000000000000, 9999999999999999),
                'phone_number' => $faker->phoneNumber(),
                'birth_date' => $faker->dateTimeInInterval('-30 years', '-20 years')->format('Y-m-d'),
                'hire_date' => Carbon::now(),
                'id_akun_iepms' => $faker->numberBetween(100000, 999999),
                'ser_wah' => $faker->numberBetween(1000000000000, 9999999999999),
                'ser_first_aid' => $faker->numberBetween(1000000000000, 9999999999999),
                'ser_electrikal' => $faker->numberBetween(1000000000000, 9999999999999),
                'status_employee' => 'internal',
                'role_id' => '1',
                'department_id' => '2',
                'foto_ktp' => 'product/ktp.jpg',
                'foto_selfie' => 'product/selfie.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'fullname' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'nik' => $faker->numberBetween(1000000000000000, 9999999999999999),
                'phone_number' => $faker->phoneNumber(),
                'birth_date' => $faker->dateTimeInInterval('-30 years', '-20 years')->format('Y-m-d'),
                'hire_date' => Carbon::now(),
                'id_akun_iepms' => $faker->numberBetween(100000, 999999),
                'ser_wah' => $faker->numberBetween(1000000000000, 9999999999999),
                'ser_first_aid' => $faker->numberBetween(1000000000000, 9999999999999),
                'ser_electrikal' => $faker->numberBetween(1000000000000, 9999999999999),
                'status_employee' => 'internal',
                'role_id' => '3',
                'department_id' => '3',
                'foto_ktp' => 'product/ktp.jpg',
                'foto_selfie' => 'product/selfie.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);

        DB::table('projects')->insert([
            [
                'site_id' => 'ZSBY_0112',
                'site_name' => $faker->company(),
                'lattitude' => $faker->latitude(),
                'longitude' => $faker->longitude(),
                'sow_id' => '1',
                'assign_date' => Carbon::now(),
                'employee_id' => '1',
                'progress' => 'Permit Request',
                'permit_start_date' => Carbon::now(),
                'permit_end_date' => Carbon::now(),
                'start_action_date' => Carbon::now(),
                'end_action_date' => Carbon::now(),
                'foto_ba_outbound' => 'product/ba_out.jpg',
                'foto_ba_inbound' => 'product/ba_in.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'site_id' => 'ZSBY_0113',
                'site_name' => $faker->company(),
                'lattitude' => $faker->latitude(),
                'longitude' => $faker->longitude(),
                'sow_id' => '2',
                'assign_date' => Carbon::now(),
                'employee_id' => '3',
                'progress' => 'Permit Request',
                'permit_start_date' => Carbon::now(),
                'permit_end_date' => Carbon::now(),
                'start_action_date' => Carbon::now(),
                'end_action_date' => Carbon::now(),
                'foto_ba_outbound' => 'product/ba_out.jpg',
                'foto_ba_inbound' => 'product/ba_in.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'site_id' => 'ZSBY_0114',
                'site_name' => $faker->company(),
                'lattitude' => $faker->latitude(),
                'longitude' => $faker->longitude(),
                'sow_id' => '3',
                'assign_date' => Carbon::now(),
                'employee_id' => '2',
                'progress' => 'Permit Request',
                'permit_start_date' => Carbon::now(),
                'permit_end_date' => Carbon::now(),
                'start_action_date' => Carbon::now(),
                'end_action_date' => Carbon::now(),
                'foto_ba_outbound' => 'product/ba_out.jpg',
                'foto_ba_inbound' => 'product/ba_in.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
