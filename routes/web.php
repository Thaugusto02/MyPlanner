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
    Route::get('/activities', [ActivityController::class, 'index'])->name('activity.index');
    Route::post('/activities', [ActivityController::class, 'create'])->name('activity.create');
    Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activity.edit');
    Route::patch('/activities/{activity}', [ActivityController::class, 'update'])->name('activity.update');
    Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->name('activity.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
