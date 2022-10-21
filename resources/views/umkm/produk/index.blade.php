@extends('layouts.layouts-admin')

@section('content')
<div class="row mt-4">
	<div class="col-lg-12 mb-lg-0 mb-4">
		<div class="card z-index-2 h-100">
			<div class="card-header pb-0 pt-3 bg-transparent">
				<h6 class="text-capitalize">Produk</h6>
			</div>
			<div class="card-body p-3">
				{{ Form::open(['route'=>'product.store','method'=>'POST','files'=>true]) }}
					<div class="form-group">
						<input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" placeholder="Nama Produk">

						@error('nama_produk')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<select name="kategori_id" id="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror">
							<option value="">Pilih Kategori Produk</option>
							@foreach($kategori as $kategori)
							<option value="{{ $kategori->id }}">{{ $kategori->jenis_kategori }}</option>
							@endforeach
						</select>

						@error('kategori_id')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat">

						@error('alamat')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="text" name="pendiri" class="form-control @error('pendiri') is-invalid @enderror" placeholder="Pendiri">

						@error('pendiri')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="date" name="berdiri_sejak" class="form-control @error('berdiri_sejak') is-invalid @enderror" placeholder="Berdiri sejak">

						@error('berdiri_sejak')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="text" name="situs_web" class="form-control @error('situs_web') is-invalid @enderror" placeholder="Situs Web">

						@error('situs_web')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="text" name="sosial_media" class="form-control @error('sosial_media') is-invalid @enderror" placeholder="Sosial Media">

						@error('sosial_media')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<textarea name="deskripsi_produk" id="deskripsi_produk" rows="3" class="form-control @error('deskripsi_produk') is-invalid @enderror" placeholder="Deskripsi Produk"></textarea>

						@error('deskripsi_produk')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="file" name="foto_produk" class="form-control @error('foto_produk') is-invalid @enderror" accept="image/png, image/jpeg">

						@error('foto_produk')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm w-100 mb-3">Tambah Produk</button>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
<div class="row mt-4">
	<div class="col-lg-12 mb-lg-0 mb-4">
		<div class="card z-index-2 h-100">
			<div class="card-body p-3">
				<table id="idsuperadminaddverifikator" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Produk</th>
							<th>Kategori</th>
							<th>QR Code</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($produk as $produk)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $produk->nama_produk }}</td>
							<td>{{ $produk->kategori->jenis_kategori }}</td>
							<td>
								<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse{{ $produk->id }}qr" role="button" aria-expanded="false" aria-controls="collapse{{ $produk->id }}qr">
									Show QR Code
								</a>
								<div class="collapse collapse-horizontal" id="collapse{{ $produk->id }}qr">
									<div class="card card-body">
										{!! $produk->qrcode->qr_code !!}
									</div>
								</div>
							</td>
							<td>
								{{ Form::model($produk, ['route'=>['product.destroy',$produk->id]]) }}
									<a href="{{ route('product.edit',$produk->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
									@method('DELETE')
									<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus produk, {{ $produk->nama_produk }} ?')"><i class="fa-solid fa-trash-can"></i></button>
								{{ Form::close() }}
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Nama Produk</th>
							<th>Kategori</th>
							<th>QR Code</th>
							<th></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@push('styles')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" integrity="sha512-160haaGB7fVnCfk/LJAEsACLe6gMQMNCM3Le1vF867rwJa2hcIOgx34Q1ah10RWeLVzpVFokcSmcint/lFUZlg==" crossorigin="anonymous">
@endpush

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" integrity="sha512-gzsDzZKwY3mJWOtC5MviMWjvGPL+FdPaxN62NTXdu0hiogj9QnpY8gpu6QGk9RExu13mOvFpHbkLfB0E31jwOQ==" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js" integrity="sha512-nfoMMJ2SPcUdaoGdaRVA1XZpBVyDGhKQ/DCedW2k93MTRphPVXgaDoYV1M/AJQLCiw/cl2Nbf9pbISGqIEQRmQ==" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js" integrity="sha512-l6Ui9CEOeis2DifjL9V8tcB76kEhvlXmpZrKgFvgN4zY3AeZL/qNlJNHFtDTqTkyYg2uGgh5cyMaQ5oMSZiXGw==" crossorigin="anonymous"></script>
<script>
	CKEDITOR.replace( 'deskripsi_produk' , {
      // Define the toolbar groups as it is a more accessible solution.
      toolbarGroups: [{
          "name": "basicstyles",
          "groups": ["basicstyles"]
        },
        {
          "name": "paragraph",
          "groups": ["list", "blocks"]
        },
        {
          "name": "styles",
          "groups": ["styles"]
        }
      ],
      // Remove the redundant buttons from toolbar groups defined above.
      removeButtons: 'Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord'
    });
	$(document).ready(function ($) {
		$.noConflict();
		$('#idsuperadminaddverifikator').DataTable();
	} );
</script>
@endpush