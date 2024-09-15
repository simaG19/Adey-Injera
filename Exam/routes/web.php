<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin routes
Route::middleware('admin')->group(function () {
    Route::get('admin', [VehicleController::class, 'adminDashboard'])->name('admin');
    Route::get('admin/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('admin/vehicle', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('admin/vehicle/{id}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('admin/vehicle/{id}', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('admin/vehicle/{id}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');
});
// Driver routes
Route::middleware('driver')->group(function () {
    Route::get('driver', [VehicleController::class, 'index'])->name('driver');
    Route::get('vehicle/{id}', [VehicleController::class, 'show'])->name('vehicle.show');
});
