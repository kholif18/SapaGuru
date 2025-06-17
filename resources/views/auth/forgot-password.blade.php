@extends('layouts.login')

@section('title', 'Forgot Password')

@section('content')
    <div class="login-header">
        <h1>Password Reset</h1>
        <p>Masukkan alamat email yang terkait dengan akun Anda untuk memulihkan kata sandi Anda</p>
    </div>
    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        <div class="input-field">
            <input type="email" name="email" id="email" value="{{ old('email') }}" autofocus required>
            <label>Masukkan email Anda</label>
            <i class="fas fa-user"></i>
            @error('email')
                <div class="error text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Reset Password</button>
        <div class="ingat">
            <p>Ingat kata sandi Anda? <a href="{{ route('login') }}">Login</a></p>
        </div>
        <div class="register">
            <small>Tidak memiliki akun? <a href="{{ route('register') }}">Register</a></small>
        </div>
    </form>
@endsection

