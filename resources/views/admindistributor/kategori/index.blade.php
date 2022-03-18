@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Tambah Kategori</div>
				<div class="card-body">
					<form action="{{ route('admindistributor.kategories.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<input type="text" name="jenis_kategori" class="form-control @error('jenis_kategori') is-invalid @enderror" placeholder="Jenis Kategori">

							@error('jenis_kategori')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Tambah Kategori</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8" style="margin-top: 10px;">
			<div class="card">
				<div class="card-header">Data Kategori</div>
				<div class="card-body">
					<table id="idkategoriadd" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>Kategori</th>
								<th>Tanggal Pembuatan/Perubahan</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($kategori as $kategori)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $kategori->jenis_kategori }}</td>
								<td>{{ $kategori->updated_at }}</td>
								<td>
									<form action="{{ route('admindistributor.kategories.destroy',$kategori->id) }}" method="POST">
										{{-- edit --}}
										<a href="{{ route('admindistributor.kategories.edit',$kategori->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>

										{{-- hapus --}}
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus kategori, {{ $kategori->jenis_kategori }} ?')"><i class="fa-solid fa-trash-can"></i></button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>No.</th>
								<th>Kategori</th>
								<th>Tanggal Pembuatan/Perubahan</th>
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
		$('#idkategoriadd').DataTable();
	} );
</script>
@endpush