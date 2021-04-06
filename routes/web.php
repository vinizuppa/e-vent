<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\EventController as PublicEvent;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\ImageController;

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
Route::get('/search', [PublicEvent::class, 'search'])->name('public.events.search');
Route::get('/detail/{event}', [PublicEvent::class, 'detail'])->name('public.events.detail');

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
