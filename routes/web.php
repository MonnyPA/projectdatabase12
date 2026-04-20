<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SowController;

Route::get('/', function () {
    return view('welcome');
});

// Handle Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Handle Project
Route::resource('/projects', ProjectController::class);

// Handle SOW
Route::resource('/sows', SowController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
