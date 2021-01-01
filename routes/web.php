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
        Route::post('/save_image', 'productController@uploadImage');
    });

    Route::group(['prefix' => '/productCategory'], function () {
        Route::get('/', 'productCategoryController@index')->name('dashboard.productCategory.index');
        Route::get('/create', 'productCategoryController@create')->name('dashboard.productCategory.create');
        Route::post('/store', 'productCategoryController@store')->name('dashboard.productCategory.store');
        Route::get('/edit/{id}', 'productCategoryController@edit')->name('dashboard.productCategory.edit');
        Route::post('/update/{id}', 'productCategoryController@update')->name('dashboard.productCategory.update');
        Route::get('/destroy/{id}', 'productCategoryController@destroy')->name('dashboard.productCategory.destroy');
        Route::post('/save_image', 'productCategoryController@uploadImage');

    });

    Route::group(['prefix' => '/productAttr'], function () {
        Route::get('/', 'productAttribiutesController@index')->name('dashboard.productAttribiutes.index');
        Route::get('/create', 'productAttribiutesController@create')->name('dashboard.productAttribiutes.create');
        Route::post('/store', 'productAttribiutesController@store')->name('dashboard.productAttribiutes.store');
        Route::get('/edit/{id}', 'productAttribiutesController@edit')->name('dashboard.productAttribiutes.edit');
        Route::post('/update/{id}', 'productAttribiutesController@update')->name('dashboard.productAttribiutes.update');
        Route::get('/destroy/{id}', 'productAttribiutesController@destroy')->name('dashboard.productAttribiutes.destroy');
    });

    Route::group(['prefix' => '/members'], function () {
        Route::get('/', 'MembersController@index')->name('dashboard.members.index');
    });

    Route::group(['prefix' => '/blog'], function () {
        Route::get('/', 'blogController@index')->name('dashboard.blog.index');
        Route::get('/create', 'blogController@create')->name('dashboard.blog.create');
        Route::post('/store', 'blogController@store')->name('dashboard.blog.store');
        Route::get('/edit/{id}', 'blogController@edit')->name('dashboard.blog.edit');
        Route::post('/update/{id}', 'blogController@update')->name('dashboard.blog.update');
        Route::get('/destroy/{id}', 'blogController@destroy')->name('dashboard.blog.destroy');
        Route::post('/save_image', 'productController@uploadImage');
    });

    Route::group(['prefix' => '/blogCategory'], function () {
        Route::get('/', 'blogCategoryController@index')->name('dashboard.blogCategory.index');
        Route::get('/create', 'blogCategoryController@create')->name('dashboard.blogCategory.create');
        Route::post('/store', 'blogCategoryController@store')->name('dashboard.blogCategory.store');
        Route::get('/edit/{id}', 'blogCategoryController@edit')->name('dashboard.blogCategory.edit');
        Route::post('/update/{id}', 'blogCategoryController@update')->name('dashboard.blogCategory.update');
        Route::get('/destroy/{id}', 'blogCategoryController@destroy')->name('dashboard.blogCategory.destroy');
        Route::post('/save_image', 'blogController@uploadImage');
    });
});
//});
//});


Route::group(['prefix' => '/account', 'namespace' => 'userpanel'], function () {
    Route::get('/', 'dashboardController@index')->name('user.account.index');
});


Route::group(['namespace'=>'site'] , function (){
    Route::get('/product/{id}' , 'productController@show')->name('site.product.show');
    Route::get('/search' , 'productController@search')->name('site.product.search');
    Route::get('/productCategory/{id}' , 'productCategoryController@show')->name('site.productCategory.show');
    Route::post('/comment' , 'homepageController@comment')->name('site.comment');

    Route::get('/cart' , 'cartController@index')->name('site.cart.index');
    Route::post('/cart/{product}' , 'cartController@store')->name('site.cart.store');
    Route::delete('/cart/{product}' , 'cartController@destroy')->name('site.cart.destroy');
    Route::post('/cart/update/i' , 'cartController@update')->name('site.cart.update.i');
    Route::post('/cart/update/d' , 'cartController@update2')->name('site.cart.update.d');

    Route::get('/shop','shopController@index')->name('site.shop.index');

    Route::get('/blog','blogController@index')->name('site.blog.index');
    Route::get('/blog/{id}','blogController@show')->name('site.blog.category.index');

    Route::group(['middleware' => 'auth:web'] , function (){
        Route::get('/checkout' , 'checkOutController@index')->name('site.checkout.index');
        Route::post('/checkout' , 'checkOutController@store')->name('site.checkout.store');

    });

    Route::get('/checkout/verify' , 'checkOutController@verifycheck');

});


Route::get('/logoutUser', 'Auth\LoginController@logout')->name('logoutUser');

