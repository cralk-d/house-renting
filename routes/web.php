<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('/booking/','BookingController@index')->name('booking.index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/posts', 'PostController');
Route::get('/invoices','InvoiceController@index')->name('invoices.index');


Route::post('/feed','FrontendController@store');
Route::post('/frontend', 'FrontendController@subscribe')->name('frontend.subscribe');
Route::post('/frontend', 'FrontendController@book')->name('frontend.book');

Route::get('/frontend/owners','FrontendController@landlords')->name('fontend.landlords');
Route::get('/frontend/{post}','FrontendController@show')->name('show');
Route::get('/','FrontendController@index')->name('index');

Route::get('/payments/pay', 'PaymentController@payment')->name('payments.pay');

Route::prefix('admin')->group(function() {
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

	Route::resource('/items', 'ItemController');
	Route::resource('/feeds','FeedController');
    Route::resource('/orders','OrderController');
    Route::resource('/invoices','InvoiceController');
    Route::resource('/posts','PostController');
    Route::resource('/payments','PaymentController');
    Route::resource('/series','SeriesController',['except' =>'show']);
	Route::resource('/users','UsersController');
	
	Route::put('/posts/{id}/approve','PostController@approval')->name('posts.approve');
	Route::get('/setting/{admin}/edit', 'AdminController@edit')->name('setting.edit');
	Route::patch('/setting/{admin}', 'AdminController@update')->name('setting.update');
	Route::post('/mark-as-read', 'AdminController@markNotification')->name('markNotification');
	Route::get('/','AdminController@index')->name('index');
});

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

