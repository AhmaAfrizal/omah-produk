@extends('layouts.layouts-admin')

@section('content')
<div class="row mt-4">
	<div class="col-lg-12 mb-lg-0 mb-4">
		<div class="card z-index-2 h-100">
			<div class="card-header pb-0 pt-3 bg-transparent">
				<h6 class="text-capitalize">Edit Kategori - {{ $kategori->jenis_kategori }}</h6>
			</div>
			<div class="card-body p-3">
				{{ Form::model($kategori, ['route' => ['admindistributor.kategories.update',$kategori->id]]) }}
					@method('PATCH')
					<div class="form-group">
						<input type="text" name="jenis_kategori" class="form-control @error('jenis_kategori') is-invalid @enderror" placeholder="Jenis Kategori" value="{{ $kategori->jenis_kategori }}">

						@error('jenis_kategori')
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