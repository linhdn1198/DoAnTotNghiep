<?php

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

Route::group(['middleware' => 'locale'], function() {
    Route::get('/', function () {
        return view('clients.index');
    })->name('home');
    
    Route::get('/simple-product', function () {
        return view('clients.simple_product');
    })->name('simple_product');
    
    Route::get('/shopping-cart', function () {
        return view('clients.shopping_cart');
    })->name('shopping_cart');
    
    Route::get('/checkout', function () {
        return view('clients.checkout');
    })->name('checkout');
    
    Route::get('/confirmation', function () {
        return view('clients.confirmation');
    })->name('confirmation');
    
    Route::get('/blog', function () {
        return view('clients.blog');
    })->name('blog');
    
    Route::get('/simple-blog', function () {
        return view('clients.simple_blog');
    })->name('simple_blog');
    
    Route::get('/about', function () {
        return view('clients.about');
    })->name('about');
    
    Route::get('/contact', function () {
        return view('clients.contact');
    })->name('contact');
    
    Route::get('/login', function () {
        return view('clients.login');
    })->name('login');
    
    Route::get('/register', function () {
        return view('clients.register');
    })->name('register');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::auth();
        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');
    });
});

Route::get('change-language/{language}', 'PageController@changeLanguage')->name('change_language');
