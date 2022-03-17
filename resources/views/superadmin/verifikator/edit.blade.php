@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Edit Admin Verifikator - {{ $user->name }}</div>
				<div class="card-body">
					<form action="{{ route('superadmin.admin_verifikator.update',$user->id) }}" method="POST">
						@csrf
						@method('PATCH')
						<div class="form-group">
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{ $user->name }}">

							@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ $user->email }}" readonly>

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
							<button type="submit" class="btn btn-primary btn-block">Edit Admin Verifikator</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush