<?php

Route::group(['middleware' => 'locale'], function() {
    Route::get('/', 'PageController@index')->name('home');
    Route::get('product-categories/{slug}', 'PageController@displayProductByCategory')->name('display_product');
    Route::get('search', 'PageController@searchProduct')->name('search_product');
    Route::get('simple-product/{slug}', 'PageController@simpleProduct')->name('simple_product');
    Route::get('comment-product/{product_id}', 'PageController@getCommentProduct')->name('comment_product');
    Route::post('comment-product', 'PageController@storeCommentProduct')->name('store_comment_product')->middleware('checklogin');
    Route::post('/add-to-cart', 'PageController@addToCart')->name('add_to_cart');
    Route::get('/shopping-cart', 'PageController@shoppingCart')->name('shopping_cart');
    Route::post('/update-cart', 'PageController@updateCart')->name('update_cart');
    Route::get('/remove-item-cart/{id}', 'PageController@removeItemCart')->name('remove_item_cart');
    Route::get('/checkout', 'PageController@checkout')->name('checkout')->middleware('checklogin');
    Route::get('/confirmation/{id}', 'PageController@confirmation')->name('confirmation');
    Route::get('/purchase-history', 'PageController@purchaseHistory')->name('purchase_history')->middleware('checklogin');
    Route::get('/purchase-history-detail/{id}', 'PageController@purchaseHistoryDetail')->name('purchase_history_detail')->middleware('checklogin');
    
    Route::get('/blog', 'PageController@post')->name('post');
    Route::get('/blog-search', 'PageController@postSearch')->name('post_search');
    Route::get('/post-categories/{slug}', 'PageController@displayPostByCategory')->name('display_post');
    Route::get('/tag/{slug}', 'PageController@displayPostByTag')->name('tag');
    Route::get('/simple-blog/{slug}', 'PageController@simpleBlog')->name('simple_blog');
    Route::get('/comment-blog/{slug}', 'PageController@getCommentBlog')->name('comment_blog');
    Route::post('comment-blog', 'PageController@storeCommentBlog')->name('store_comment_blog')->middleware('checklogin');

    Route::get('/about', 'PageController@about')->name('about');
    Route::get('/contact', 'PageController@contact')->name('contact');
    Route::get('/login', 'PageController@showLoginForm')->name('show_form_login');
    Route::post('/login', 'PageController@login')->name('login');
    Route::get('/register', 'PageController@showRegisterForm')->name('show_form_register');
    Route::post('/register', 'PageController@register')->name('register');
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');
    });
});

Route::get('change-language/{language}', 'PageController@changeLanguage')->name('change_language');
