@extends('layouts.login')

@section('title', 'Login')

@section('content')
    <div class="login-header">
        <h1>Selamat Datang</h1>
        <p>Silakan login dengan akun Anda</p>
    </div>
    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-field">
            <input type="text" id="login" name="login" value="{{ old('login') }}" autofocus required>
            <label>Username or Email</label>
            <i class="fas fa-user"></i>
            @error('login')
                <div class="error text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-field">
            <input type="password" id="password" name="password" required>
            <label>Password</label>
            <i class="fas fa-lock"></i>
            @error('password') 
                <div class="error text-red-600 text-sm mt-1">{{ $message }}</div> 
            @enderror
        </div>
        <div class="forget">
            <label for="remember">
            <input type="checkbox" name="remember" id="remember">
            <p>Remember me</p>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
        </div>
        <button type="submit">Log In</button>
        <div class="register">
            <small>Don't have an account? <a href="{{ route('register') }}">Register</a></small>
        </div>
    </form>
@endsection
