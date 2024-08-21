<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::prefix('/activities')->group(function () {
        Route::get('/', [ActivityController::class, 'index'])->name('activity.index');
        Route::post('/', [ActivityController::class, 'create'])->name('activity.create');
        Route::get('/{activity}/edit', [ActivityController::class, 'edit'])->name('activity.edit');
        Route::patch('/{activity}', [ActivityController::class, 'update'])->name('activity.update');
        Route::delete('/{activity}', [ActivityController::class, 'destroy'])->name('activity.destroy');
    });
    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';
