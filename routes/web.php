<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::get('/layanan', function () {
    return view('layanannest');
})->middleware(middleware: ['auth', 'verified'])->name('layanan');

Route::get('/sampaikan', function () {
    return view('sampaikannest');
})->middleware(middleware: ['auth', 'verified'])->name('sampaikan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
