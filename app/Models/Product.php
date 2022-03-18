<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table 	= 'products';
	protected $fillable = ['id','nama_produk','kategori_id','deskripsi_produk','foto_produk'];

	public function kategori(){
		return $this->belongsTo('App\Models\Kategory');
	}
	public function qrcode(){
		return $this->belongsTo('App\Models\QRCode','id');
	}
}
