<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/profile', [AdminController::class, 'show'])->name('admin.profile.show');
    Route::get('/profile/{admin}/edit', [AdminController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/profile/{admin}', [AdminController::class, 'update'])->name('admin.profile.update');
});


