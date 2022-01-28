<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','HomeController@index')
    ->name('home');

Route::get('/detail/{slug}','DetailController@index')
    ->name('detail');

Route::get('/about','AboutController@index')
    ->name('about');

Route::post('/checkout/{id}','CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}','CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}','CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}','CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}','CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth','verified']);

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->namespace('Admin')
    ->group(function(){
        Route::get('/','DashboardController@index')
            ->name('dashboard')
            ->middleware(['auth','verified']);
    });
Auth::routes(['verify'=>true]);

Route::get('products/{id}/gallery','ProductController@gallery')
    ->name('products.gallery');

Route::resource('products', 'ProductController');

Route::resource('product_galleries', 'ProductGalleryController');


Route::get('transactions/{id}/set-status','TransactionController@setStatus')
    ->name('transactions.status');

Route::resource('transactions', 'TransactionController');



