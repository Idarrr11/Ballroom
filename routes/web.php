<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/gedung', function () {
    return view('gedung');
});
Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/web', function () {
    return view('layanan1');
})->middleware(['auth', 'verified'])->name('web');

Route::get('/web1', function () {
    return view('layanan2');
})->middleware(['auth', 'verified'])->name('web1');

Route::get('/web2', function () {
    return view('layanan3');
})->middleware(['auth', 'verified'])->name('web2');

Route::get('/dashboard', function () {
    return view('website');
})->middleware(middleware: ['auth', 'verified'])->name('dashboard');


Route::get('/sampaikan', function () {
    return view('sampaikannest');
});

Route::get('/kegiatan-1', function () {
    return view('kegiatan1');
});

Route::get('/kegiatan-2', function () {
    return view('kegiatan2');
});

Route::get('/kegiatan-3', function () {
    return view('kegiatan3');
});

Route::get('/kegiatan-4', function () {
    return view('kegiatan4');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
