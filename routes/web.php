<?php

use App\Models\Kategory;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\AdmindisController;

// Route::get('/', function () {
// 	return view('frontend.welcome');
// });
// Route::get('/', function () {
//     return view('frontend.home');
// });

// Route::resource('/', 'BerandaController');
// Route::resource('/search', 'SearchController');
// Route::resource('/produk', 'BerandaController');

Route::get('/', 'BerandaController@index');
Route::get('/search', 'SearchController@index');
Route::get('/produk/{product:url_produk}', 'BerandaController@show');
Route::get('/kategori', 'KategoriController@index');
// Route::get('/kategori/{kategori:url_jenis_kategori}', function(Kategory $kategori){
// 	return view('frontend.kategori', [
// 		'nama_produk'=> $kategori->jenis_kategori,
// 		'produk'=> $kategori->produk,
// 		'kategori'=> $kategori->jenis_kategori
// 	]);
// });

// Route::get('/detail', function () {
//     return view('frontend.viewproduk',[
//         "title" => "Detail"
//     ]);
// });

Route::get('/about', function () {
    return view('frontend.about', [
        "title" => "About"
    ]);
});
Route::get('/kontak', function () {
    return view('frontend.contact', [
        "title" => "Hubungi-kami"
    ]);
});
// Route::get('/search', function () {
//     return view('frontend.search', [
//         "title" => "Produk"
//     ]);
// });

Route::get('/produsen', function() {
	return view('produsen');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::resource('product','ProdController');
//tambahkan produk
Route::get('/tambahproduk', function () {
	return view('tampilanproduk');
});
//tampilan produk
Route::get('/tampilanproduk', 'ProdController@show');
Route::post('/add_process', 'ProdController@add_process');
//menuju web (detail produk dan tambah web)
Route::get('/detail','ProdController@index');
Route::get('{id}/produk/{nama_produk}','HomeController@detailproduk')->name('detail.produk');

// ==============================================================
// is super admin
Route::middleware('is_superadmin')->namespace('Superadmin')->prefix('v1/superadmin')->name('superadmin.')->group(function(){
	Route::get('home','HomeController@index')->name('home');
	Route::resource('admin_verifikator','AdminverifikatorController');
	Route::resource('admin_dis','AdmindisController');
	Route::resource('User','UserController');
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


//barang
Route::get('/barang', 'BarangController@index');
Route::get('/tambahbarang', 'BarangController@create');
Route::post('/tambahbarang', 'BarangController@store');
Route::get('/edit_barang/{id}', 'BarangController@edit');
Route::post('/edit_barang/{id}', 'BarangController@update');
Route::get('/hapus/{id}', 'BarangController@destroy');