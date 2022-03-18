@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<div class="card-header">Tambah Produk</div>
				<div class="card-body">
					<form action="{{ route('admindistributor.product.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" placeholder="Nama Produk">

							@error('nama_produk')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<select name="kategori_id" id="kategori_id" class="form-control">
								<option value="0">Pilih Kategori Produk</option>
								@foreach($kategori as $kategori)
								<option value="{{ $kategori->id }}">{{ $kategori->jenis_kategori }}</option>
								@endforeach
							</select>

							@error('email')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<textarea name="deskripsi_produk" class="form-control" rows="3" class="form-control" placeholder="Deskripsi Produk"></textarea>

							@error('password')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<input type="file" name="foto_produk" class="form-control" accept="image/png, image/jpeg">

							@error('password')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Tambah Produk</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Add Admin Verifikator</div>
				<div class="card-body">
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
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{ $produk->id }}">
										Show QR Code
									</button>
									<div class="modal fade" id="Modal{{ $produk->id }}" tabindex="-1" aria-labelledby="Modal{{ $produk->id }}Label" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="Modal{{ $produk->id }}Label">Modal title</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													{!! $produk->qrcode->qr_code !!}
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>	
								</td>
								<td>
									<form action="{{ route('superadmin.admin_verifikator.destroy',$produk->id) }}" method="POST">
										<a href="{{ route('superadmin.admin_verifikator.edit',$produk->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus user, {{ $produk->name }} ?')"><i class="fa-solid fa-trash-can"></i></button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Email</th>
								<th>Verified at</th>
								<th></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function ($) {
		$.noConflict();
		$('#idsuperadminaddverifikator').DataTable();
	} );
</script>
@endpush