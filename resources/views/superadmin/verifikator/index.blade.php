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
	</div>
</div>
@endsection