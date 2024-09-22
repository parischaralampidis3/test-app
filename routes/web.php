<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



//Routes for company

Route::get('company/{company:id}', [CompanyController::class, 'show'])->name('company.show');

Route::get('/create', [CompanyController::class, 'create'])->middleware('auth')->name('company.create');  // Fixed
Route::post('create', [CompanyController::class, 'store']);

Route::get('edit/{company:id}', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('edit/{company:id}', [CompanyController::class, 'update'])->name('company.update');

//initiate a route for archiving soft deleted results
Route::get('archive',[CompanyController::class, 'archive'])->middleware('auth')->name('company.archive');
//Initiate a route for hard deleted results.
Route::delete('company/{company:id}', [CompanyController::class, 'destroy'])->name('company.destroy');

Route::post('company/{company:id}/restore', [CompanyController::class, 'restore'])->name('company.restore');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function(){
 return view('auth.register');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [CompanyController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';
