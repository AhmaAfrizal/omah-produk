<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
	protected $table 	= 'qrcodes';
	protected $fillable = ['product_id','qr_code'];

	public function produk(){
		return $this->hasMany('App\Models\Product','product_id','id');
	}
}
