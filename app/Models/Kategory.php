<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
	protected $table    = 'kategories';
	protected $fillable = ['id','jenis_kategori','url_jenis_kategori'];

	public function produk(){
		return $this->hasMany('App\Models\Product');
	}
}
