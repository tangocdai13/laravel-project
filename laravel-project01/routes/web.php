<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
   return 'Product';
})->name('product');

Route::get('/category', function () {
    return 'Category';
})->name('categories.index');

Route::get('/news', function () {
    return 'new';
})->name('news.index');

Route::get('/contact', function () {
    return 'contact';
})->name('contact.index');

Route::get('/map', function () {
    })->name('map.index');

Route::get('/product-detail/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('test/{id}', function ($id) {
    return 'Id input: '.$id;
})->name('test');

Route::get('products', [ProductController::class, 'index']);
Route::get('/test', function () {
   return 'test';
});

//Route::get('/{slug?}/{id?}', function ($slug, $id=null) {
//    return 'Slug= '.$slug.'<br>'. 'id= '.$id;
//});


