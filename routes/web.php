<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\ManageController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin/dashboard/dashboard_2');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('user')->controller(UserController::class)->name('user.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('service')->controller(ServiceController::class)->name('service.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('booking')->controller(BookingController::class)->name('booking.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('history')->controller(HistoryController::class)->name('history.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('manage')->controller(ManageController::class)->name('manage.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('staff')->controller(StaffController::class)->name('staff.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('voucher')->controller(VoucherController::class)->name('voucher.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
});
