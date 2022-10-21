<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main" data-color="primary">
	<div class="sidenav-header">
		<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
		<a class="navbar-brand m-0" href="#" target="_blank">
			<img src="{{ asset('5mhuwAcA/img/favicon.png') }}" class="navbar-brand-img h-100" alt="main_logo">
			<span class="ms-1 font-weight-bold">
				 {{ config('app.name', 'Omah Produk') }} 
			</span>
		</a>
	</div>
	<hr class="horizontal dark mt-0">
	<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
		<ul class="navbar-nav">
			@guest
			@else
				@if(auth()->user()->is_superadmin == 1)
					<li class="nav-item">
						<a class="nav-link {{ Request::routeIs('superadmin.home') ? 'active' : '' }}" href="{{ route('superadmin.home') }}">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="ni ni-world text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Dashboard</span>
						</a>
					</li>
					{{-- <li class="nav-item">
						<a class="nav-link {{ Request::routeIs('superadmin.admin_verifikator.index') ? 'active' : '' }}" href="{{ route('superadmin.admin_verifikator.index') }}">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Admin Verifikator</span>
						</a>
					</li> --}}
					<li class="nav-item">
						<a class="nav-link {{ Request::routeIs('superadmin.admin_dis.index') ? 'active' : '' }}" href="{{ route('superadmin.admin_dis.index') }}">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="ni ni-circle-08 text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Admin Distributor</span>
						</a>
					</li>
					<li class="nav-item mt-3">
						<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Other pages</h6>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ Request::routeIs('superadmin.User.index') ? 'active' : '' }}" href="{{ route('superadmin.User.index') }}">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">User account</span>
						</a>
					</li>
				@elseif(auth()->user()->is_adminverifikator == 1)
					Admin Verifikator
				@elseif(auth()->user()->is_admindistributor == 1)
					<li class="nav-item">
						<a class="nav-link {{ Request::routeIs('admindistributor.home') ? 'active' : '' }}" href="{{ route('admindistributor.home') }}">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="ni ni-world text-primary text-sm opacity-10"></i>
								{{-- <i class="fa-regular fa-gauge"></i> --}}
							</div>
							<span class="nav-link-text ms-1">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ Request::routeIs('admindistributor.product.index') ? 'active' : '' }}" href="{{ route('admindistributor.product.index') }}">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="ni ni-briefcase-24 text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Produk</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ Request::routeIs('admindistributor.kategories.index') ? 'active' : '' }}" href="{{ route('admindistributor.kategories.index') }}">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="ni ni-bag-17 text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Kategori</span>
						</a>
					</li>
				@elseif(auth()->user())
				<li class="nav-item">
					<a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
						<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-world text-primary text-sm opacity-10"></i>
							{{-- <i class="fa-regular fa-gauge"></i> --}}
						</div>
						<span class="nav-link-text ms-1">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ Request::routeIs('product.index') ? 'active' : '' }}" href="{{ route('product.index') }}">
						<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
							<i class="ni ni-briefcase-24 text-primary text-sm opacity-10"></i>
						</div>
						<span class="nav-link-text ms-1">Produk</span>
					</a>
				</li>
				@endif
			@endguest
			{{-- <li class="nav-item">
				<a class="nav-link " href="./pages/tables.html">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Tables</span>
				</a>
			</li> --}}
			{{-- <li class="nav-item">
				<a class="nav-link " href="./pages/billing.html">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-credit-card text-success text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Billing</span>
				</a>
			</li> --}}
			{{-- <li class="nav-item">
				<a class="nav-link " href="./pages/virtual-reality.html">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-app text-info text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Virtual Reality</span>
				</a>
			</li> --}}
			{{-- <li class="nav-item">
				<a class="nav-link " href="./pages/rtl.html">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">RTL</span>
				</a>
			</li> --}}
		</ul>
	</div>
	<div class="sidenav-footer mx-3 ">
		<a href="{{ url('/') }}" class="btn btn-primary btn-sm w-100 mb-3" target="_blank">Kunjungi Homepage</a>
		<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm w-100 mb-3">{{ __('Logout') }}</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
		</form>
	</div>
</aside>