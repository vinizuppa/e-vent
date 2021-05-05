<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ImageController;

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
Route::get('/search', [EventController::class, 'search'])->name('public.events.search');
Route::prefix('/event/{event}')->group(function () {
    Route::get('detail', [EventController::class, 'detail'])->name('public.events.detail');
    Route::get('subscribe', [EventController::class, 'subscribe'])->name('public.events.subscribe')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');
        Route::resource('users', UserController::class);
        Route::resource('events', EventController::class);
        Route::resource('events.activities', ActivityController::class)->shallow();
        Route::resource('events.images', ImageController::class)->shallow();
    });
});


require __DIR__.'/auth.php';
