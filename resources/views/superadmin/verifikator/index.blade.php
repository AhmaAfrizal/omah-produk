@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Add Admin Verifikator</div>
				<div class="card-body">
					<form action="{{ route('admin_verifikator.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama">

							@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">

							@error('email')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">

							@error('password')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Tambah Admin Verifikator</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Add Admin Verifikator</div>
				<div class="card-body">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
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
								<td></td>
							</tr>
							@endforeach
						</tfoot>
					</table>
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
	$(document).ready(function () {
		$.noConflict();
		$('#example').DataTable();
	} );
</script>
@endpush