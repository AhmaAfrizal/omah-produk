@extends('layouts.app')

@section('content')
{{-- ini adalah halaman register asli --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <p class="small fw-bold mt-3 mt-lg-2 pt-3 text-center">Sudah punya akun? <a href="{{ route('login') }}"
                            class="link-danger" style="text-decoration: none;">login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- ini adalah halaman register kustom --}}
<div class="container shadow" style="border-radius:20px; background-color:white;">
    <section class=" mb-4">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100 py-5">
          <div class="col-md-9 col-lg-6 col-xl-5">
    
           <img src="img/Register.png" class="img-fluid"
              alt="Sample image">
    
          </div>

            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="divider text-center text-lg-start my-4">
                        <h2  class="fw-bold mb-4" style="font-weight: 700; color:#767676">Register</h2>
                    </div>
    
                    <!-- memasukkan username -->
                    <div class="form-outline mb-4">
                        <input id="name" type="text" style="background-color:#ebebeb;" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        {{-- <input type="text" id="name" style="background-color:#ebebeb;" class="form-control form-control-lg"
                        placeholder="Username" /> --}}
                    </div>
    
              <!-- masukkan emaill -->
              <div class="form-outline mb-4">
                <input id="email" type="email" style="background-color:#ebebeb;" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                {{-- <input type="email" id="email" style="background-color:#ebebeb;" class="form-control form-control-lg"
                  placeholder="Email" /> --}}
              </div>
    
              <!-- masukkan password -->
              <div class="form-outline mb-4">
                <input id="password" type="password" style="background-color:#ebebeb;" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                {{-- <input type="password" id="password" style="background-color:#ebebeb;" class="form-control form-control-lg"
                  placeholder="Password" /> --}}
              </div>
    
              <!-- konfirmasi password -->
              <div class="form-outline mb-4">
                <input id="password-confirm" type="password" style="background-color:#ebebeb;" class="form-control form-control-lg" placeholder="Konfirmasi password" name="password_confirmation" required autocomplete="new-password">

                {{-- <input type="password" id="password-confirm" style="background-color:#ebebeb;" class="form-control form-control-lg"
                  placeholder="Konfirmasi Password" /> --}}
              </div>
    
              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-success btn-lg"
                  style="padding-left: 40px; padding-right: 40px; padding-top:7px; padding-bottom: 7px ; border-radius:30px; font-size: 16px; font-weight:600;">Register</button>

                <p class="small fw-bold mt-3 mt-lg-2 pt-1 mb-0">Sudah punya akun? <a href="{{ route('login') }}"
                    class="link-danger" style="text-decoration: none;">login</a></p>
              </div>
    
            </form>
            
          </div>
        </div>
      </div>
      
    </section>
</div>
@endsection
