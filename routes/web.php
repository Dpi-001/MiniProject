<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProfileController;
use App\Models\Details;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');

Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');

Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');


Route::get('/banner/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');

Route::post('/banner/{id}/update', [BannerController::class, 'update'])->name('banner.update');

Route::get('/banner/{id}/destroy', [BannerController::class, 'destroy'])->name('banner.destroy');


Route::get('/details', [DetailsController::class, 'index'])->name('details.index');

Route::get('/details/create', [DetailsController::class, 'create'])->name('details.create');

Route::post('/details/store', [DetailsController::class, 'store'])->name('details,store'); // Corrected the route name

Route::get('/details/{id}/edit', [DetailsController::class, 'edit'])->name('details.edit');

Route::post('/details/{id}/update', [DetailsController::class, 'update'])->name('details.update');

Route::get('/details/{id}/destroy', [DetailsController::class, 'destroy'])->name('details.destroy'); // Fixed spelling



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
