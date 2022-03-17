<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProdukController extends Controller
{
    public function show()
    {
        $articles = DB::table('produk')->get();
        return view('show', ['articles'=>$articles]);
    }
 
    public function add_process(Request $articles)
    {
        DB::table('produk')->insert([
            'judul'=>$articles->judul,
            'deskripsi'=>$articles->deskripsi
        ]);
    
        return redirect()->action('ProdukController@show');
    }

    public function index()
   {
    return view ('index');
   }
}