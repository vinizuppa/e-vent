<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\SubscriptionController;

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
    Route::middleware('auth')->group(function() {
        Route::get('subscribe', [SubscriptionController::class, 'create'])->name('public.subscription.create');
        Route::post('subscribe', [SubscriptionController::class, 'store'])->name('public.subscription.store');        
    });
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');
        Route::get('activities', [AdminController::class, 'activities'])->name('admin.activities');
        Route::get('subscriptions', [AdminController::class, 'subscriptions'])->name('admin.subscriptions');
        Route::get('subscriptions/{subscription}/payment', [SubscriptionController::class, 'paymentForm'])->name('subscription.payment');
        Route::put('subscriptions/{subscription}/payment', [SubscriptionController::class, 'payment'])->name('subscription.payment.store');
        Route::get('subscriptions/{subscription}/confirmation', [SubscriptionController::class, 'confirmationForm'])->name('subscription.confirmation');
        Route::put('subscriptions/{subscription}/confirmation', [SubscriptionController::class, 'confirmation'])->name('subscription.confirmation.store');
        Route::resource('configurations', ConfigurationController::class)->only(['index', 'create', 'store']);
        Route::resource('users', UserController::class);
        Route::resource('events', EventController::class);
        Route::resource('events.activities', ActivityController::class)->shallow();
        Route::resource('events.subscriptions', SubscriptionController::class)->only(['index', 'show', 'destroy'])->shallow();
    });
});


require __DIR__.'/auth.php';
