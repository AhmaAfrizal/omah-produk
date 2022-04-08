<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = DB::table('tb_barang')->get();
        return view('barang',['barang'=>$barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('tambahbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table ('tb_barang')->insert
        ([
            'nama_barang'=> $request->nama_barang,
            'deskripsi'=> $request->deskripsi,
            'harga_satuan'=> $request->harga_satuan,
            'stok'=> $request->stok
        ]);
        return redirect ('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $barang= DB::table("tb_barang")
        ->where('id_barang','=', $id)
        ->first();
        return view ('edit_barang',['barang'=>$barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tb_barang')
        ->where('id_barang', '=', $id)
        ->update([
            'nama_barang' => $request->nama_barang,
            'harga_satuan' =>$request->harga_satuan,
            'stok' =>$request->stok
        ]);
        return redirect ('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_barang')
        ->where('id_barang', '=', $id)
        ->delete();
        return redirect('barang');
    }
}
