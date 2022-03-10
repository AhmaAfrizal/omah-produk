<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ==============================================================
// is super admin
Route::group(['middleware' => 'is_superadmin','namespace' => 'Superadmin','prefix'=>'v1/superadmin'], function() {
    Route::get('home','HomeController@index')->name('super_admin.home');
    Route::resource('admin_verifikator','AdminverifikatorController');
});

// is admin distributor
Route::group(['middleware' => 'is_admindistributor','namespace' => 'Admindistributor','prefix'=>'admin_dis'], function() {
    Route::get('home','HomeController@index')->name('admin_dist.home');
});

// is admin verifikator
Route::group(['middleware' => 'is_adminverifikator','namespace' => 'AdminVerifikator','prefix'=>'admin_verif'], function() {
    Route::get('home','HomeController@index')->name('admin_verif.home');
});
// ==============================================================