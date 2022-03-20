<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('5mhuwAcA/img/favicon.png') }}?v=2.0.1">
	<link rel="icon" type="image/png" href="{{ asset('5mhuwAcA/img/favicon.png') }}?v=2.0.1">
	<title> {{ config('app.name', 'Omah Produk') }} </title>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	
	<script src="https://kit.fontawesome.com/42d5adcbca.js" integrity="sha512-LnuABhhXE0X/lbkFBPRXkBOpw4tSvtFgtMWoKOr7dq5Uub+gSHX+UEO2S6Jw5KRYGCrjVUe5d7OLg8VefUFFTQ==" crossorigin="anonymous"></script>
	
	<link id="pagestyle" href="{{ asset('5mhuwAcA/css/app-back.css') }}?v=2.0.1" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous">

	@stack('styles')

</head>

<body class="g-sidenav-show bg-gray-100">
	<div class="min-height-300 bg-primary position-absolute w-100"></div>

	@include('layouts.components.aside')
	
	<main class="main-content position-relative border-radius-lg ">
		
		@include('layouts.components.nav')
		
		<div class="container-fluid py-4">
			@yield('content')
			@include('layouts.components.footer')
		</div>
	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js?v=2.10.2" integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js?v=2.0.1" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous"></script>

	<script src="{{ asset('5mhuwAcA/js/perfect-scrollbar.js') }}?v=2.0.1"></script>
	<script src="{{ asset('5mhuwAcA/js/smooth-scrollbar.js') }}?v=2.0.1"></script>
	<script src="{{ asset('5mhuwAcA/js/chartjs.js') }}?v=2.0.1"></script>

	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>

	<script async defer src="{{ asset('5mhuwAcA/js/app-back.js') }}?v=2.0.1"></script>
	@stack('scripts')
</body>
</html>