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

Route::get('/see-phpinfo', function () {
    echo phpinfo();
});

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

//get request for logout. 
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/tarrif', 'PagesController@tarrif');
Route::get('/contact-us', 'PagesController@contact');
Route::post('/submit-contact-us', 'PagesController@submit_contact');
Route::get('/about-us', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/get-taxi', 'PagesController@get_taxi');
Route::get('/team', 'PagesController@team');
Route::get('/earn-with-us', 'PagesController@earn');
Route::get('/questions-answers', 'PagesController@faqs');
Route::get('/terms-conditions', 'PagesController@terms');
Route::post('/make-booking', 'BookingController@make_booking');
/**
 * Only Customer routes 
 * 
 */

 //display booking it is open for any user for now
Route::get('/booking-detail/{booking_id}', 'BookingController@detail');

Route::group(['middleware' => 'CustomerCheck'], function () {
    //show list for customer. 
    Route::get('/booking-list', 'CustomerController@list');
     //display booking
    //Route::get('/booking-detail/{booking_id}', 'CustomerController@detail');
     //submit booking form
});

/**
 * Driver routes. 
 */

Route::group(['middleware' => 'DriverCheck'], function () {
    Route::get('/driver/booking-list', 'DriverController@list');
});

/**
 * Admin routes
 */
Route::group(['middleware' => 'AdminCheck'], function () {

    //password change for driver 
    Route::get('/admin/drivers/change-password/{id}', 'Admin\DriverController@change_password');
    Route::post('/admin/drivers/save-password/', 'Admin\DriverController@save_password');
    //password cahnge for customer
    Route::get('/admin/customers/change-password/{id}', 'Admin\CustomerController@change_password');
    Route::post('/admin/customers/save-password/', 'Admin\CustomerController@save_password');

    Route::resource('/admin/customers', 'Admin\CustomerController');
    Route::resource('/admin/cabs', 'Admin\CabController');
    Route::resource('/admin/drivers', 'Admin\DriverController');
    Route::resource('/admin/faqs', 'Admin\FaqController');
    Route::get('/admin/faqs/delete/{id}', 'Admin\FaqController@destroy');
    Route::resource('/admin/bookings', 'Admin\BookingController');
    Route::get('/admin/bookings/delete/{id}', 'Admin\BookingController@destroy');
    //booking custom routes
    Route::get('/admin/bookings/assign/{id}', 'Admin\BookingController@assign');
    Route::post('/admin/bookings/confirm/{id}', 'Admin\BookingController@confirm');

    Route::resource('/admin/tarrifs', 'Admin\TarrifController');
    Route::resource('/admin/services', 'Admin\ServiceController');
    Route::resource('/admin/terms', 'Admin\TermsController');
    Route::resource('/admin/settings', 'Admin\SettingsController');
    Route::resource('/admin/airports', 'Admin\AirportController');
    Route::get('/admin/airports/delete/{id}', 'Admin\AirportController@destroy');
    Route::get('/admin', 'Admin\AdminController@index');

});

Auth::routes();