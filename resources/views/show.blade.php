<!-- menggunakan kerangka dari halaman master.blade.php --> 
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Omah Produk')
 
<!-- membuat header dan tombol tambah produk di atas -->
@section('header')
    <center>
        <h2>Omah Produk</h2>
        <a href="/add"><button class="btn btn-danger">Tambah Produk</button></a>
    </center>
@endsection
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi produk -->
@section('main')
    @foreach ($articles as $data)
    <div class="col-md-4 col-sm-12 mt-4">
        <div class="card">
            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.kompas.com%2Ffood%2Fread%2F2020%2F07%2F31%2F130600175%2Fresep-sate-plecing-singaraja-bali-rasa-pedas-dan-asam-segar%3Fpage%3Dall&psig=AOvVaw098imZVuya5WfaO6gynmuS&ust=1647318029823000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJjM1YbgxPYCFQAAAAAdAAAAABAD" class="card-img-top" alt="gambar" >
            <div class="card-body">
                <h5 class="card-title">{{ $data->judul }}</h5>
                <h6 class="card-body">{{ $data->deskripsi_produk }}</h6>
                <a href="http://127.0.0.1:8000/detail" class="btn btn-info">Detail Produk</a>
            </div>
        </div>
    </div>
   @endforeach
@endsection

