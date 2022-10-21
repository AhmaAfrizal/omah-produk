<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategory;
use App\Models\QRCode;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk 	= Product::with('kategori','qrcode')->orderby('id','desc')->get();
		// dd($produk);
        $kategori 	= Kategory::orderby('jenis_kategori','asc')->get();
		return view('frontend.home', compact('produk','kategori'));
    }

    public function show(Product $product)
    {
        return view('frontend.viewproduk' , [
            "produk" => $product
        ]);
    }
    // public function show($id)
    // {

    //     return view('frontend.viewproduk' , [
    //         "produk" => Product::find($id)
    //     ]);

    //     // $produk       =       Product::find($url_produk);
    //     // return view("frontend.viewproduk", compact("produk"));
    // }

}
