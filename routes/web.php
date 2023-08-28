<?php

use App\Livewire\Todo;
use App\Livewire\Counter;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\User\Dashboard as UserDashboard;

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

Route::get('/', Welcome::class);
Route::get('/todo', Todo::class);
Route::get('/counter', Counter::class);


// Admin Routes
Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class])->name('dashboard');
});

// User routes
Route::prefix('user')->name('user.')->namespace('User')->group(function () {
    Route::get('/dashboard', [UserDashboard::class])->name('dashboard');
});
