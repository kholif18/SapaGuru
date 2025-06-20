<!DOCTYPE html>
<html lang="id">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>SapaGuru | @yield('title')</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

		<!-- Fonts and icons -->
		<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
		<script>
			WebFont.load({
				google: {"families":["Public Sans:300,400,500,600,700"]},
				custom: {"families":["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], 
						urls: ['{{ asset("assets/css/fonts.min.css") }}']},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!-- CSS Files -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/siswa.css') }}">

		@stack('styles') <!-- Untuk CSS tambahan per halaman -->
	</head>
	<body>
		@include('siswa.partials.header')

		@include('siswa.partials.sidebar')
		<!-- Konten Utama -->
		<div class="container">
			@yield('content')
			<!-- Spacer untuk bottom nav -->
    		<div style="height: 80px;"></div>
		</div>

		@include('siswa.partials.bottom-nav')

		<!-- Core JS Files -->
		<script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

		<!-- Plugin JS -->
		<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

		<!-- Main JS -->
		<script src="{{ asset('assets/js/sapaguru.min.js') }}"></script>

		@stack('scripts') <!-- Untuk JS tambahan per halaman -->
	</body>
</html>