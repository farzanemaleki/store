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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage', 'site\homepageController@index')->name('homepage');
//mitoni az middleware dakhele controller estefade koinm

//Route::group([ 'middleware' => [ 'auth', 'admin' ]], function() {
Route::get('/dashboard', 'adminpanel\dashboardController@index')->name('dashboard');

Route::group(['prefix' => '/dashboard', 'namespace' => 'adminpanel'], function () {

    Route::group(['prefix' => '/products'], function () {

        Route::get('/', 'productController@index')->name('dashboard.product.index');
        Route::get('/create', 'productController@create')->name('dashboard.product.create');
        Route::post('/store', 'productController@store')->name('dashboard.product.store');
        Route::get('/edit/{id}', 'productController@edit')->name('dashboard.product.edit');
        Route::post('/update/{id}', 'productController@update')->name('dashboard.product.update');
        Route::get('/destroy/{id}', 'productController@destroy')->name('dashboard.product.destroy');
    });
    Route::group(['prefix' => '/productCategory'], function () {
        Route::get('/', 'productCategoryController@index')->name('dashboard.productCategory.index');
        Route::get('/create', 'productCategoryController@create')->name('dashboard.productCategory.create');
        Route::post('/store', 'productCategoryController@store')->name('dashboard.productCategory.store');

    });
    Route::post('/save_image', 'productController@uploadImage');
});
//});

Route::group(['prefix' => '/account', 'namespace' => 'userpanel'], function () {

    Route::get('/', 'dashboardController@index')->name('user.account.index');
});
Route::group(['namespace'=>'site'] , function (){
    Route::get('/product/{id}' , 'productController@show')->name('site.product.show');
    Route::get('/productCategory/{id}' , 'productCategoryController@show')->name('site.productCategory.show');

    Route::get('/cart' , 'cartController@index')->name('site.cart.index');
    Route::post('/cart/{product}' , 'cartController@store')->name('site.cart.store');
    Route::delete('/cart/{product}' , 'cartController@destroy')->name('site.cart.destroy');

    Route::get('/shop','shopController@index')->name('site.shop.index');
});

Route::get('/logoutUser', 'Auth\LoginController@logout')->name('logoutUser');


