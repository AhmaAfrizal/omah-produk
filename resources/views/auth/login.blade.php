@extends('layouts.app')

@section('content')
{{-- ini adalah halaman login asli --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <p class="small fw-bold mt-3 mt-lg-2 pt-3 text-center">Belum mempunyai akun? <a href="{{ route('register') }}"
                            class="link-danger" style="text-decoration: none;">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- ini adalah halaman login custom --}}
<div class="container shadow" style="border-radius:20px; background-color:white;">
    <section class="">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100 py-5">
          <div class="col-md-9 col-lg-6 col-xl-5">
    
            <img src="img/Login.png" class="img-fluid"
              alt="Sample image">
    
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="divider text-center text-lg-start my-5">
                <h2  class="fw-bold mb-4" style="font-weight: 700; color:#767676">Login</h2>
                </div>
    
              <!-- memasukkan email -->
                
                <div class="form-outline mb-4">
                    <input id="email" style="background-color:#ebebeb;" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                {{-- <input type="email" id="email" style="background-color:#ebebeb;" class="form-control form-control-lg"
                placeholder="Email" /> --}}
            </div>
    
            <!-- memasukkan password -->
            
              <div class="form-outline mb-3">
                  <input id="password" type="password" style="background-color:#ebebeb;" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              {{-- <input type="password" id="password" style="background-color:#ebebeb;" class="form-control form-control-lg"
              placeholder="password" /> --}}
              </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label>
              </div>
              @if (Route::has('password.request'))
                  <a class="btn btn-link text-body" href="{{ route('password.request') }}">
                      {{ __('Lupa password?') }}
                  </a>
              @endif
            </div>
            <!-- ini adalah tombol -->
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-success btn-lg"
                  style="padding-left: 40px; padding-right: 40px; padding-top:7px; padding-bottom: 7px ; border-radius:30px; font-size: 16px; font-weight:600;">{{ __('Login') }}</button>

              <p class="small fw-bold mt-3 mt-lg-2 pt-1 mb-0">Belum mempunyai akun? <a href="{{ route('register') }}"
                  class="link-danger" style="text-decoration: none;">Register</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>      
  </section>
</div>
@endsection
