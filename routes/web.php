<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')->group(function () {
    // HomePage
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // UserList
    Route::get('/dashboard/user-list', [DashboardController::class, 'userList'])->name('dashboard.user-list');

    // BookManagement
    Route::get('/dashboard/book-management', [DashboardController::class, 'bookManagement'])->name('dashboard.book-management');
    Route::post('/dashboard/book-management/add', [DashboardController::class, 'addBook'])->name('dashboard.book-management.add');
    Route::get('/dashboard/book-management/edit/{id}', [DashboardController::class, 'editBook'])->name('dashboard.book-management.edit');
    Route::put('/dashboard/book-management/update/{id}', [DashboardController::class, 'updateBook'])->name('dashboard.book-management.update');
    Route::delete('/dashboard/book-management/delete/{id}', [DashboardController::class, 'deleteBook'])->name('dashboard.book-management.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/books/{id}', [HomeController::class, 'show'])->name('book.details');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
