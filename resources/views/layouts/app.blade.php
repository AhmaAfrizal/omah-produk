<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'omh-produk') }}</title>
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	@stack('styles')
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body style="background-color:#fffeda; font-family:'Poppins', Montserrat, sans-serif;">
	<div id="app">
		{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name', 'Laravel') }}
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">
						@guest
						@else
						@if(auth()->user()->is_superadmin == 1)
							<li class="nav-item">
								<a class="nav-link" href="{{ route('superadmin.admin_verifikator.index') }}">Admin Verifikator</a>
							</li>
						@elseif(auth()->user()->is_adminverifikator == 1)
							<li class="nav-item">
								<a class="nav-link" href="#">coba admin distributor</a>
							</li>
						@elseif(auth()->user()->is_admindistributor == 1)
							<li class="nav-item dropdown">
								<a id="navbarDropdown_produk" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									Produk
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown_produk">
									<a class="dropdown-item" href="{{ route('admindistributor.product.index') }}">
										Produk
									</a>
									<a class="dropdown-item" href="{{ route('admindistributor.kategories.index') }}">
										Kategori
									</a>
								</div>
							</li>
						@endif
						@endguest
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }}
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav> --}}

		<!-- navbar kustom 2 -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			  <a class="navbar-brand" href="\">
				<img
				  src="{{asset('img/Rectangle 30.svg')}}"
				  alt=""
				  width="110"
				  height="45"
				  class="d-inline-block"
				/>
				<!--   omah <strong>produk</strong> -->
			  </a>
			  <button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbarNav"
				aria-controls="navbarNav"
				aria-expanded="false"
				aria-label="Toggle navigation"
			  >
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				{{-- ini untuk search --}}
				<form
				  action="\search"
				  class="from d-flex ms-auto my-4 my-lg-2 w-text-center w-sm-10"
				>
				  <input
					
					class="form-control me-2"
					type="text"
					name="search"
					placeholder="Cari Produk"
					value="{{request('search')}}"
				  />
				  <button class="btn" style="background-color: #54defd;" type="submit">
					<i class="fa-solid fa-magnifying-glass"></i>
				  </button>
				</form>
				<ul class="navbar-nav ms-auto">
				  <li class="nav-item">
					<a class="nav-link me-1" href="\kontak"
					  ><strong>Contact</strong></a
					>
				  </li>
				  <li class="nav-item">
					<a class="nav-link me-1" href="\about"
					  ><strong>About</strong></a
					>
				  </li>
					@guest
							<li class="nav-item">
								<form action="{{ route('login') }}">
								<button
									type="submit"
									class="btn btn-success me-3 px-3"
									style="border-radius: 30px; margin-left: 30px"
								>
									<strong>Login</strong>
								</button>
								</form>
							</li>
							{{-- @if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif --}}
					@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									<img
									style="border: 1px solid gray"
						            src="{{asset('img/user icon.png')}}"
    						        class="rounded-circle"
        						    height="28"
        					    	alt="avatar"
        						    loading="lazy"
							        />
								</a>
								
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"><strong>{{ Auth::user()->name }}</strong></a>
									<div class="dropdown-divider"></div>
									@guest
									@else
									@if(auth()->user()->is_superadmin == 1)
										<a class="dropdown-item" href="{{ route('superadmin.home') }}"><i class="fa-solid fa-gauge-high"></i>	{{ __('Dashboard') }}</a>
									@elseif(auth()->user()->is_adminverifikator == 1)
										<a class="dropdown-item" href="#">Dashboard</a>
									@elseif(auth()->user()->is_admindistributor == 1)
										<a class="dropdown-item" href="{{ route('admindistributor.home') }}"><i class="fa-solid fa-gauge-high"></i>	{{ __('Dashboard') }}</a>
									@endif
									@endguest
									<a class="dropdown-item" href="{{ route('home') }}"><i class="fa-solid fa-gear"></i>	{{ __('Settings') }}</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}	<i class="fa-solid fa-right-from-bracket"></i>
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
						@endguest
				</ul>
			  </div>
			</div>
		  </nav>

		<main class="py-4">
			@yield('content')
		</main>
			@include('layouts.footer')
	</div>

	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	@stack('scripts')
</body>
</html>
