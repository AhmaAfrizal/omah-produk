<?php

namespace App\Http\Controllers\Admindistributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kategory;
use App\Models\QRCode;
use SimpleSoftwareIO\QrCode\Generator;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		$produk 	= Product::with('kategori','qrcode')->orderby('id','desc')->get();
		// dd($produk);
		$kategori 	= Kategory::orderby('jenis_kategori','asc')->get();
		return view('admindistributor.produk.index', compact('produk','kategori'));

		// return view('frontend.home.', compact('produk','kategori'));
	}

	public function create(){
		return view('admindistributor.produk.create');
	}

	public function store(Request $request){
		$request->validate([
			'nama_produk' 		=> 'required|unique:products',
			'kategori_id'		=> 'required',
			'alamat'			=> 'required',
			'pendiri'			=> 'required',
			'berdiri_sejak'		=> 'required',
			'situs_web'			=> 'required',
			'sosial_media'		=> 'required',
			'deskripsi_produk'	=> 'required',
			'foto_produk' 		=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);
		$produk 				= Product::create($request->all());
		$produk->url_produk 	= Str::slug($request->nama_produk);
		// change name foto_produk
		$namaFotoProduk 		= time().'.'.$request->foto_produk->extension();
		// move foto to public path foto_produk
		$request->foto_produk->move(public_path('foto_produk'), $namaFotoProduk);
		// save nama foto_produk to db
		$produk->foto_produk 	= $namaFotoProduk;
		$produk->save();

		$produkid 		= $produk->id;
		$qrcodegenerator= new Generator;
		$qr 			= new QRCode;
		$qr->product_id = $produkid;
		$qr->qr_code 	= $qrcodegenerator->encoding('UTF-8')->size(200)->generate(''.route('detail.produk',[$produk->id,$produk->url_produk]).'');
		$qr->save();

		return redirect()->back();
	}

	public function edit($id)
	{
		$produk = Product::find($id);
		return view('admindistributor.produk.edit', compact('produk'));
	}
	public function update(Request $request, $id)
	{
		$produk = Product::find($id);
		$produk->nama_produk 			= $request->nama_produk;
		$produk->alamat 				= $request->alamat;
		$produk->pendiri				= $request->pendiri;
		$produk->berdiri_sejak			= $request->berdiri_sejak;
		$produk->situs_web				= $request->situs_web;
		$produk->sosial_media			= $request->sosial_media;
		$produk->deskripsi_produk 		= $request->deskripsi_produk;
		$produk->save();

		return redirect()->route('admindistributor.product.index');
	}
	// public function update(Request $request, $id)
	// {
	// 	$produk = Product::find($id);
	// 	$request->validate([
	// 		'nama_produk' 	=> 'required|unique:product',]);
	// 	$produk->nama_produk 			= $request->nama_produk;
	// 	$produk->url_jenis_kategori 	= Str::slug($request->nama_produk);
	// 	$produk->deskripsi_produk 		= $request->deskripsi_produk;
	// 	$produk->save();

	// 	return redirect()->route('admindistributor.product.index');
	// }

	// public function update(Request $request, $id)
	// {
	// 	// $kategori = Kategory::find($id);
	// 	// $request->validate([
	// 	// 	'jenis_kategori' 	=> 'required|unique:kategories',Rule::unique('kategories')->ignore($kategori->id),
	// 	// ]);
	// 	// $kategori->jenis_kategori 		= $request->jenis_kategori;
	// 	// $kategori->url_jenis_kategori 	= Str::slug($request->jenis_kategori);
	// 	// $kategori->save();

	// 	return redirect()->route('admindistributor.product.index');
	// }

	public function destroy($id){
		$produk = Product::find($id);
		unlink(public_path('foto_produk'.'/'.$produk->foto_produk));
		$produk->delete();
		QRCode::where('product_id',$id)->delete();
		return redirect()->back();
	}
}
