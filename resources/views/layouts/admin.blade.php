@extends('layouts.app')

@section('body')
	<div class="wrapper">
		<!-- Sidebar Admin -->
		@include('admin.partials.sidebar')
		
		<div class="main-panel">
			<!-- Header Admin -->
			@include('admin.partials.header')
			
			<!-- Konten Utama -->
			<div class="container">
				@yield('content')
			</div>
			
			<!-- Footer Admin -->
			@include('admin.partials.footer')
		</div>
	</div>

	<!-- Script Khusus Admin -->
	@push('scripts')
		<script>
			// Sparkline Charts
			$('#lineChart').sparkline([102,109,120,99,110,105,115], {
				type: 'line',
				height: '70',
				width: '100%',
				lineWidth: '2',
				lineColor: '#177dff',
				fillColor: 'rgba(23, 125, 255, 0.14)'
			});

			$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
				type: 'line',
				height: '70',
				width: '100%',
				lineWidth: '2',
				lineColor: '#f3545d',
				fillColor: 'rgba(243, 84, 93, .14)'
			});

			$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
				type: 'line',
				height: '70',
				width: '100%',
				lineWidth: '2',
				lineColor: '#ffa534',
				fillColor: 'rgba(255, 165, 52, .14)'
			});
		</script>
	@endpush
@endsection