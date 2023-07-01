<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebitController;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryDebitController;
use App\Http\Controllers\CategoryKreditController;

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




    
    Route::get('/dahsboard/CategoryKredit/', [CategoryKreditController::class, 'index'])->name('CategoryKredit');
    Route::get('/dahsboard/CategoryKredit/create', [CategoryKreditController::class, 'create'])->name('CategoryKredit.create');
    Route::post('/dahsboard/CategoryKredit/store', [CategoryKreditController::class, 'store'])->name('CategoryKredit.store');
    Route::get('/dahsboard/CategoryKredit/{id}/edit', [CategoryKreditController::class, 'edit'])->name('CategoryKredit.edit');
    Route::put('/dahsboard/CategoryKredit/{id}', [CategoryKreditController::class, 'update'])->name('CategoryKredit.update');
    Route::delete('/dahsboard/CategoryKredit/{id}', [CategoryKreditController::class, 'destroy'])->name('CategoryKredit.destroy');

    Route::get('/dahsboard/CategoryDebit/', [CategoryDebitController::class, 'index'])->name('CategoryDebit');
    Route::get('/dahsboard/CategoryDebit/create', [CategoryDebitController::class, 'create'])->name('CategoryDebit.create');
    Route::post('/dahsboard/CategoryDebit/store', [CategoryDebitController::class, 'store'])->name('CategoryDebit.store');
    Route::get('/dahsboard/CategoryDebit/{id}/edit', [CategoryDebitController::class, 'edit'])->name('CategoryDebit.edit');
    Route::put('/dahsboard/CategoryDebit/{id}', [CategoryDebitController::class, 'update'])->name('CategoryDebit.update');
    Route::delete('/dahsboard/CategoryDebit/{id}', [CategoryDebitController::class, 'destroy'])->name('CategoryDebit.destroy');
});

require __DIR__.'/auth.php';
