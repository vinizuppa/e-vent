<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');
        Route::prefix('/users')->group(function () {
            Route::get('/', [UsersController::class, 'list'])->name('users.list');
            Route::get('/{id}', [UsersController::class, 'show'])->whereNumber('id')->name('users.show');
        });
    });
});


require __DIR__.'/auth.php';
