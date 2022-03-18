<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Route::get('/produsen', function() {
	return view('produsen');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('{id}/produk/{nama_produk}','HomeController@detailproduk')->name('detail.produk');

// ==============================================================
// is super admin
Route::middleware('is_superadmin')->namespace('Superadmin')->prefix('v1/superadmin')->name('superadmin.')->group(function(){
	Route::get('home','HomeController@index')->name('home');
	Route::resource('admin_verifikator','AdminverifikatorController');
});

// is admin distributor
Route::middleware('is_admindistributor')->namespace('Admindistributor')->prefix('admin_dis')->name('admindistributor.')->group(function(){
	Route::get('home','HomeController@index')->name('home');
	Route::resource('product','ProdukController');
	Route::resource('kategories','KategoryController');

	//tambahkan produk
	Route::get('/tambahproduk', function () {
		return view('tampilanproduk');
	});
	//tampilan produk
	Route::get('/tampilanproduk', 'ProdukController@show');
	Route::post('/add_process', 'ProdukController@add_process');
	//menuju web (detail produk dan tambah web)
	Route::get('/detail','ProdukController@index');
});

// is admin verifikator
Route::middleware('is_adminverifikator')->namespace('AdminVerifikator')->prefix('admin_verif')->name('adminverifikator.')->group(function(){
	Route::get('home','HomeController@index')->name('home');
});

Route::get('/kontributor', 'Superadmin\ProdusenController@index')->name('kontributor');
Route::post('/kontributor', 'Superadmin\ProdusenController@input')->name('input.kontributor');