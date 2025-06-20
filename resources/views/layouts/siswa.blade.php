@extends('layouts.app')

@section('body')
	<div class="wrapper">
		<!-- Sidebar Admin -->
		@include('siswa.partials.sidebar')
		
		<div class="main-panel">
			<!-- Header Admin -->
			@include('siswa.partials.header')
			
			<!-- Konten Utama -->
			<div class="container">
				@yield('content')
			</div>
			
			<!-- Footer Admin -->
			@include('siswa.partials.footer')
		</div>
	</div>
    @push('scripts')
    @endpush
@endsection