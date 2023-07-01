<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
  ->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dahsboard/debit/', [DebitController::class, 'index'])->name('debit');
    Route::get('/dahsboard/debit/create', [DebitController::class, 'create'])->name('debit.create');
    Route::post('/dahsboard/debit/store', [DebitController::class, 'store'])->name('debit.store');
    Route::get('/dahsboard/debit/{id}/edit', [DebitController::class, 'edit'])->name('debit.edit');
    Route::put('/dahsboard/debit/{id}', [DebitController::class, 'update'])->name('debit.update');
    Route::delete('/dahsboard/debit/{id}', [DebitController::class, 'destroy'])->name('debit.destroy');

    Route::get('/dahsboard/kredit/', [KreditController::class, 'index'])->name('kredit');
    Route::get('/dahsboard/kredit/create', [KreditController::class, 'create'])->name('kredit.create');
    Route::post('/dahsboard/kredit/store', [KreditController::class, 'store'])->name('kredit.store');
    Route::get('/dahsboard/kredit/{id}/edit', [KreditController::class, 'edit'])->name('kredit.edit');
    Route::put('/dahsboard/kredit/{id}', [KreditController::class, 'update'])->name('kredit.update');
    Route::delete('/dahsboard/kredit/{id}', [KreditController::class, 'destroy'])->name('kredit.destroy');
});

require __DIR__.'/auth.php';
