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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('admin.home');

Route::get('/admin/users', [UsersController::class, 'list'])
    ->middleware('auth')
    ->name('users.list');
Route::get('/admin/users/{id}', [UsersController::class, 'show'])
    ->middleware('auth')
    ->name('users.show');

require __DIR__.'/auth.php';
