<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/home', function () {
    return view('app');
});

Route::prefix('admin')->as('admin.')->group(function() {
   Route::resource('category', CategoryController::class);
   Route::resource('customer', CustomerController::class);
   Route::resource('order', OrderController::class);
   Route::resource('product', ProductController::class);
   Route::resource('setting', SettingController::class);
   Route::resource('user', UserController::class);
});



