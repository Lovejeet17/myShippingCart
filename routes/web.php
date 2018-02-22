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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('admin', function () {
//    return view('create_product');
//});

Route::get('admin', 'Crud\AdminController@adminLogin');

Route::post('admin/signup', 'Crud\AdminController@signup');

Route::post('admin/login', 'Crud\AdminController@login');

Route::get('admin/home', 'Crud\AdminController@adminHome');

Route::get('admin/logout', 'Crud\AdminController@adminLogout');

Route::get('home', 'Store\ServeController@home');

Route::get('login', 'Store\ServeController@toLogin');

Route::get('signup', 'Store\ServeController@toSignup');

Route::post('user/login', 'Store\ServeController@login');

Route::post('user/signup', 'Store\ServeController@signup');

Route::get('user/logout', 'Store\ServeController@logout');

Route::get('admin/all_products', 'Crud\AdminController@showProdcuts');

Route::post('admin/product/create', 'Crud\ProductController@createProduct');        // create new product

Route::get('admin/product/delete/{id}', 'Crud\ProductController@deleteProduct');         // delete product

Route::post('admin/product/edit', 'Crud\ProductController@editProduct');         // edit product

Route::post('product/addToCart/{id}', 'Crud\CartController@addToCart');         // add product to cart

Route::get('cart/{id}', 'Crud\CartController@viewCart');         // go to cart

Route::get('product/remove/{id}', 'Crud\CartController@removeFromCart');         // remove product from cart