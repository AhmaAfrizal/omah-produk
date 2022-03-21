@extends('layouts.layouts-admin')

@section('content')
<div class="row mt-4">
	<div class="col-lg-12 mb-lg-0 mb-4">
		<div class="card z-index-2 h-100">
			<div class="card-header pb-0 pt-3 bg-transparent">
				<h6 class="text-capitalize">Admin Verifikator</h6>
			</div>
			<div class="card-body p-3">
				{{ Form::open(['route'=>'superadmin.admin_verifikator.store','method'=>'POST','files'=>true]) }}
					<div class="form-group">
						<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama">

						@error('name')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">

						@error('email')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">

						@error('password')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm w-100 mb-3">Tambah Admin Verifikator</button>
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
							<th>Name</th>
							<th>Email</th>
							<th>Verified at</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($user as $user)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->email_verified_at }}</td>
							<td>
								{{ Form::model($user, ['route'=>['superadmin.admin_verifikator.destroy',$user->id]]) }}
									<a href="{{ route('superadmin.admin_verifikator.edit',$user->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
									@method('DELETE')
									<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus user, {{ $user->name }} ?')"><i class="fa-solid fa-trash-can"></i></button>
								{{ Form::close() }}
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
@endsection

@push('styles')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" integrity="sha512-160haaGB7fVnCfk/LJAEsACLe6gMQMNCM3Le1vF867rwJa2hcIOgx34Q1ah10RWeLVzpVFokcSmcint/lFUZlg==" crossorigin="anonymous">
@endpush

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" integrity="sha512-gzsDzZKwY3mJWOtC5MviMWjvGPL+FdPaxN62NTXdu0hiogj9QnpY8gpu6QGk9RExu13mOvFpHbkLfB0E31jwOQ==" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js" integrity="sha512-nfoMMJ2SPcUdaoGdaRVA1XZpBVyDGhKQ/DCedW2k93MTRphPVXgaDoYV1M/AJQLCiw/cl2Nbf9pbISGqIEQRmQ==" crossorigin="anonymous"></script>
<script>
	$(document).ready(function ($) {
		$.noConflict();
		$('#idsuperadminaddverifikator').DataTable();
	} );
</script>
@endpush