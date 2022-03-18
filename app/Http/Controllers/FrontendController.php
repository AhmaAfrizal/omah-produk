<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
	public function detailproduk($id,$nama_produk)
	{
		$produk = Product::find($id);
		return view('frontend.detailproduk', compact('produk'));
	}
}
