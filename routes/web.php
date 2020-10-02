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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage', function () {
    return view('site.homepage.homepage');
});
//mitoni az middleware dakhele controller estefade koinm

Route::group([ 'middleware' => [ 'auth', 'admin' ]], function() {
    Route::get( '/dashboard' , 'adminpanel\dashboardController@index' )->name('dashboard');
});

Route::get('/logoutUser','Auth\LoginController@logout')->name('logoutUser');
