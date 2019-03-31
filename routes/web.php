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
})->name('home');

Auth::routes(['verify' => true]);

// Shop Routes

// Admin Routes

Route::get('/admin/dashboard' , 'AdminController@index')->name('admin.home');



Route::get('/admin/dashboard/vendor' , 'AdminController@vendor')->name('admin.vendor');

// Vendor Routes77
Route::get('/vendor/register' , 'VendorController@register')->name('vendor.register');
Route::get('/vendor/{vendor}/awaitconfirmation' , 'VendorController@awaitconfirm')->name('vendor.awaitconfirmation');
Route::post('/vendor/register/confirm' , 'VendorController@confirm')->name('vendor.confirm');
Route::post('/vendor/register/complete' , 'VendorController@complete')->name('vendor.complete');


// User Routes

