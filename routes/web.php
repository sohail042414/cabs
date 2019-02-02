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
/*
Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

 //submit booking form
Route::post('/make-booking', 'BookingController@make_booking');
//display booking
Route::get('/booking-detail/{booking_id}', 'BookingController@detail');
Route::get('/booking-list', 'BookingController@list');
//get request for logout. 
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/contact-us', 'PagesController@contact');
Route::get('/about-us', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/get-taxi', 'PagesController@get_taxi');
Route::get('/tarrif', 'PagesController@tarrif');
Route::get('/team', 'PagesController@team');
Route::get('/earn-with-us', 'PagesController@earn');

Route::get('/questions-answers', 'PagesController@faqs');

Route::get('/terms-conditions', 'PagesController@terms');

/**
 * Admin routes
 */
Route::resource('/admin/faqs', 'Admin\FaqController');
Route::resource('/admin/bookings', 'Admin\BookingController');
Route::get('/admin/bookings/confirm/{id}', 'Admin\BookingController@confirm');
Route::resource('/admin/tarrifs', 'Admin\TarrifController');
Route::resource('/admin/services', 'Admin\ServiceController');
Route::resource('/admin/terms', 'Admin\TermsController');
Route::resource('/admin/settings', 'Admin\SettingsController');

Route::get('/admin', 'Admin\AdminController@index');

Auth::routes();