<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ==============================================================
// is super admin
Route::middleware('is_superadmin')->namespace('Superadmin')->prefix('v1/superadmin')->name('superadmin.')->group(function(){
    Route::get('home','HomeController@index')->name('home');
    Route::resource('admin_verifikator','AdminverifikatorController');
});

// is admin distributor
Route::middleware('is_admindistributor')->namespace('Admindistributor')->prefix('admin_dis')->name('admindistributor.')->group(function(){
    Route::get('home','HomeController@index')->name('home');
});

// is admin verifikator
Route::middleware('is_adminverifikator')->namespace('AdminVerifikator')->prefix('admin_verif')->name('adminverifikator.')->group(function(){
    Route::get('home','HomeController@index')->name('home');
});
// ==============================================================