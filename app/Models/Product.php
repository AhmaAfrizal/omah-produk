<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table 	= 'products';
	// protected $guarded = ['id'];
	protected $fillable = ['id','nama_produk','kategori_id','alamat','pendiri','berdiri_sejak','situs_web','sosial_media','berdiri_sejak','deskripsi_produk','foto_produk'];

	public function kategori(){
		return $this->belongsTo('App\Models\Kategory');
	}
	public function qrcode(){
		return $this->belongsTo('App\Models\QRCode','id');
	}
}