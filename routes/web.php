<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SowController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProjectExport;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {

    // Handle Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Handle Project
    Route::resource('/projects', ProjectController::class);

    // Handle Download
    Route::get('/export-projects', function () {
    return Excel::download(new ProjectExport, 'projects.xlsx');
    });


    // Handle SOW
    Route::resource('/sows', SowController::class)->middleware(['role: pemegang_saham,pemilik,admin,manager']);

    // Handle Employee
    Route::resource('/employees', EmployeeController::class);

    // Handle Department
    Route::resource('/departments', DepartmentController::class);

    // Handle Role
    Route::resource('/roles', RoleController::class)->middleware(['role: pemegang_saham,pemilik,admin,manager']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
