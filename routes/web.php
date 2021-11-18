<?php

Auth::routes();

Route::get('/', 'site\homepageController@index')->name('homepage');

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::group(['prefix' => '/dashboard', 'namespace' => 'adminpanel'], function () {

        Route::get('', 'dashboardController@index')->name('dashboard');

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

        Route::group(['prefix' => '/comments'], function () {
            Route::get('/', 'commentsController@index')->name('dashboard.comments.index');
            Route::get('/UnConfirmedComments', 'commentsController@UnConfirmedComments')->name('dashboard.comments.unconfirmed');
            Route::get('/UnConfirmedComments/{id}', 'commentsController@confirmedComments')->name('dashboard.comments.confirmed');
            Route::get('/UnConfirmedComments/destroy/{id}', 'commentsController@destroy')->name('dashboard.comments.unconfirmed.destroy');
            Route::get('/ConfirmedComments/destroy/{id}', 'commentsController@destroy2')->name('dashboard.comments.destroy2');
        });

        Route::group(['prefix' => '/orders'], function () {
            Route::get('/', 'ordersController@index')->name('dashboard.orders.index');
//        Route::get('/create', 'ordersController@create')->name('dashboard.orders.create');
//        Route::post('/store', 'ordersController@store')->name('dashboard.orders.store');
            Route::get('/show/{id}', 'ordersController@show')->name('dashboard.orders.show');
//        Route::post('/update/{id}', 'ordersController@update')->name('dashboard.orders.update');
            Route::get('/destroy/{id}', 'ordersController@destroy')->name('dashboard.orders.destroy');
        });

        Route::group(['prefix' => '/siteInfo'], function () {
            Route::get('/', 'SiteInfoController@index')->name('dashboard.siteInfo.index');
            Route::get('/edit/{id}', 'SiteInfoController@edit')->name('dashboard.siteInfo.edit');
            Route::post('/update/{id}', 'SiteInfoController@update')->name('dashboard.siteInfo.update');
            Route::post('/save_image', 'SiteInfoController@uploadImage');
        });

        Route::group(['prefix' => '/elec'], function () {
            Route::get('/', 'electricalSymbolController@index')->name('dashboard.elecSymbol.index');
            Route::get('/create', 'electricalSymbolController@create')->name('dashboard.elecSymbol.create');
            Route::post('/store', 'electricalSymbolController@store')->name('dashboard.elecSymbol.store');
            Route::get('/edit/{id}', 'electricalSymbolController@edit')->name('dashboard.elecSymbol.edit');
            Route::post('/update/{id}', 'electricalSymbolController@update')->name('dashboard.elecSymbol.update');
            Route::get('/destroy/{id}', 'electricalSymbolController@destroy')->name('dashboard.elecSymbol.destroy');
        });

        Route::group(['prefix' => '/socialMedia'], function () {
            Route::get('/', 'socialMediaController@index')->name('dashboard.socialMedia.index');
            Route::get('/create', 'socialMediaController@create')->name('dashboard.socialMedia.create');
            Route::post('/store', 'socialMediaController@store')->name('dashboard.socialMedia.store');
            Route::get('/edit/{id}', 'socialMediaController@edit')->name('dashboard.socialMedia.edit');
            Route::post('/update/{id}', 'socialMediaController@update')->name('dashboard.socialMedia.update');
            Route::get('/destroy/{id}', 'socialMediaController@destroy')->name('dashboard.socialMedia.destroy');
        });

        Route::group(['prefix' => '/links'], function () {
            Route::get('/', 'linkController@index')->name('dashboard.link.index');
            Route::get('/edit/{id}', 'linkController@edit')->name('dashboard.link.edit');
            Route::post('/update/{id}', 'linkController@update')->name('dashboard.link.update');
        });

        Route::group(['prefix' => '/partner'], function () {
            Route::get('/', 'partnerController@index')->name('dashboard.partner.index');
            Route::get('/create', 'partnerController@create')->name('dashboard.partner.create');
            Route::post('/store', 'partnerController@store')->name('dashboard.partner.store');
            Route::get('/edit/{id}', 'partnerController@edit')->name('dashboard.partner.edit');
            Route::post('/update/{id}', 'partnerController@update')->name('dashboard.partner.update');
            Route::get('/destroy/{id}', 'partnerController@destroy')->name('dashboard.partner.destroy');
        });
    });
});

Route::group(['prefix' => '/account'], function () {
    Route::get('/', 'userpanel\dashboardController@index')->name('user.account.index');
    Route::post('/update/{id}', 'userpanel\dashboardController@update')->name('user.account.update');
    Route::post('/show/{id}', 'userpanel\dashboardController@show')->name('user.account.show');
});

Route::group(['namespace' => 'site'], function () {
    Route::get('/product/{id}', 'productController@show')->name('site.product.show');
    Route::get('/search', 'productController@search')->name('site.product.search');
    Route::get('/productCategory/{id}', 'productCategoryController@show')->name('site.productCategory.show');

    Route::post('/comment', 'homepageController@comment')->name('site.comment');

    Route::get('/cart', 'cartController@index')->name('site.cart.index');
    Route::post('/cart/{product}', 'cartController@store')->name('site.cart.store');
    Route::delete('/cart/{product}', 'cartController@destroy')->name('site.cart.destroy');
    Route::post('/cart/update/i', 'cartController@update')->name('site.cart.update.i');
    Route::post('/cart/update/d', 'cartController@update2')->name('site.cart.update.d');

    Route::get('/shop', 'shopController@index')->name('site.shop.index');

    Route::get('/blog', 'blogController@index')->name('site.blog.index');
    Route::get('/blog/{id}', 'blogController@show')->name('site.blog.category.index');
    Route::get('/singleblog/{id}', 'singleBlogController@show')->name('site.blog.single.index');

    Route::get('/contactUs', 'siteInfoController@index')->name('site.contactUs.index');

    Route::get('/aboutUs', 'aboutUsController@index')->name('site.aboutUs.index');

    Route::get('/Q&A', 'QAndAController@index')->name('site.Q&A.index');

    Route::group(['middleware' => 'auth:web'], function () {
        Route::get('/checkout', 'checkOutController@index')->name('site.checkout.index');
        Route::post('/checkout', 'checkOutController@store')->name('site.checkout.store');

    });

    Route::get('/checkout/verify', 'checkOutController@verifycheck');

});

Route::get('/logoutUser', 'Auth\LoginController@logout')->name('logoutUser');

