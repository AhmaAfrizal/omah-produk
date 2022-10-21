<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk 	= Product::latest();
        if (request('search')) {
            $produk->where('nama_produk' , 'like' , '%' . request('search') . '%');
        }

        return view('frontend.search' ,[
            "produk" => $produk->get()
        ]);

		// dd(request('search'));
        // $produk 	= Product::with('kategori','qrcode')->orderby('id','desc')->get();
		// return view('frontend.search', compact('produk'));
    }
    
}
