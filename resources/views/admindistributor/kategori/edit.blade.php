@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Edit - {{ $kategori->jenis_kategori }}</div>
				<div class="card-body">
					<form action="{{ route('admindistributor.kategories.update',$kategori->id) }}" method="POST">
						@csrf
						@method('PATCH')
						<div class="form-group">
							<input type="text" name="jenis_kategori" class="form-control @error('jenis_kategori') is-invalid @enderror" placeholder="Jenis Kategori" value="{{ $kategori->jenis_kategori }}">

							@error('jenis_kategori')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Edit Kategori - {{ $kategori->jenis_kategori }}</button>
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