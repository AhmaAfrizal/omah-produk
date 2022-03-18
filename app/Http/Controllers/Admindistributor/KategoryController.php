<?php

namespace App\Http\Controllers\Admindistributor;

use App\Http\Controllers\Controller;
use App\Models\Kategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class KategoryController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		$kategori 	= Kategory::orderby('jenis_kategori','asc')->get();
		return view('admindistributor.kategori.index', compact('kategori'));
	}

	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		$validasikategori 		= $request->validate([
			'jenis_kategori' 	=> 'required|unique:kategories'
		]);
		$kategori = Kategory::create($validasikategori);
		$kategori->url_jenis_kategori = Str::slug($request->jenis_kategori);
		$kategori->save();

		return redirect()->back();
	}

	public function show(Kategory $kategory)
	{
		//
	}

	public function edit($id)
	{
		$kategori = Kategory::find($id);
		return view('admindistributor.kategori.edit', compact('kategori'));
	}

	public function update(Request $request, $id)
	{
		$kategori = Kategory::find($id);
		$request->validate([
			'jenis_kategori' 	=> 'required|unique:kategories',Rule::unique('kategories')->ignore($kategori->id),
		]);
		$kategori->jenis_kategori 		= $request->jenis_kategori;
		$kategori->url_jenis_kategori 	= Str::slug($request->jenis_kategori);
		$kategori->save();

		return redirect()->route('admindistributor.kategories.index');
	}

	public function destroy($id)
	{
		Kategory::find($id)->delete();
		return redirect()->back();
	}
}
