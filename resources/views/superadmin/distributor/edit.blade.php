@extends('layouts.layouts-admin')

@section('content')
<div class="row mt-4">
	<div class="col-lg-12 mb-lg-0 mb-4">
		<div class="card z-index-2 h-100">
			<div class="card-header pb-0 pt-3 bg-transparent">
				<h6 class="text-capitalize">Edit Admin Verifikator - {{ $user->name }}</h6>
			</div>
			<div class="card-body p-3">
				{{ Form::model($user, ['route' => ['superadmin.admin_verifikator.update',$user->id]]) }}
					@method('PATCH')
					<div class="form-group">
						<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{ $user->name }}">

						@error('name')
							<div class="valid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ $user->email }}" readonly>

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
						<button type="submit" class="btn btn-primary w-100 mb-3">Simpan</button>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush