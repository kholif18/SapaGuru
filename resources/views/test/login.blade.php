@extends('layouts.login')

@section('title', 'Login')

@section('content')
    <div class="login-header">
        <h1>Selamat Datang</h1>
        <p>Silakan login dengan akun Anda</p>
    </div>
    <form action="#">
        <div class="input-field">
            <input type="text" autofocus required>
            <label>Username or Email</label>
            <i class="fas fa-user"></i>
        </div>
        <div class="input-field">
            <input type="password" required>
            <label>Password</label>
            <i class="fas fa-lock"></i>
        </div>
        <div class="forget">
            <label for="remember">
            <input type="checkbox" id="remember">
            <p>Remember me</p>
            </label>
            <a href="{{ url('/forgot') }}">Forgot password?</a>
        </div>
        <button type="submit">Log In</button>
        <div class="register">
            <small>Don't have an account? <a href="{{ url('/register') }}">Register</a></small>
        </div>
    </form>
@endsection
