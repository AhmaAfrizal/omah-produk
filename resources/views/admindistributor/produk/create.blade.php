<!-- membuat kerangka dari master.blade.php -->
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Menambah Produk')
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan deskripsi produk -->
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
            <label>Deskripsi Produk</label>
            <textarea class="form-control" name="deskripsi" rows="15"></textarea>
        </div>
</div>
@endsection
 
<!-- membuat komponen sidebar yang berisi tombol untuk upload produk -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class="form-group">
        <label>Tekan untuk upload</label>
        <input type="submit" class="form-control btn btn-primary" value="Upload">
    </div>
</div>
</form>
@endsection
