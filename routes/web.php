<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

//Routes for company
Route::get('/', [CompanyController::class, 'index']);
Route::get('company/{company:id}', [CompanyController::class, 'show']);
Route::get('create', [CompanyController::class, 'create']);
Route::post('create', [CompanyController::class, 'store']);
Route::post('company/{company:id}', [CompanyController::class, 'update']);
Route::delete('company/{company:id}', [CompanyController::class, 'destroy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
