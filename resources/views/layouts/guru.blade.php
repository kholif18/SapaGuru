@extends('layouts.app')

@section('body')
	<div class="wrapper">
		<!-- Sidebar Admin -->
		@include('guru.partials.sidebar')
		
		<div class="main-panel">
			<!-- Header Admin -->
			@include('guru.partials.header')
			
			<!-- Konten Utama -->
			<div class="container">
				@yield('content')
			</div>
			
			<!-- Footer Admin -->
			@include('guru.partials.footer')
		</div>
	</div>
    @push('scripts')
    @endpush
@endsection