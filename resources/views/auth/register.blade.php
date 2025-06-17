@extends('layouts.login')

@section('title', 'Login')

@section('content')
    <div class="login-header">
        <h1>Registrasi</h1>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-field">
            <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus required>
            <label for="name">Nama Lengkap</label>
            @error('name')
                <div class="error text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-field">
            <input type="text" id="username" name="username" value="{{ old('username') }}" required>
            <label for="username">Username</label>
            @error('username')
                <div class="error text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-field">
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            <label for="email">Email</label>
            @error('email')
                <div class="error text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-field">
            <input type="password" id="password" name="password" required>
            <label for="password">Password</label>
            <i class="fas fa-eye toggle-password" data-target="password" style="cursor: pointer;"></i>
        </div>
        <div class="input-field">
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            <label for="password_confirmation">Confirm Password</label>
            <i class="fas fa-eye toggle-password" data-target="password_confirmation" style="cursor: pointer;"></i>
        </div>
        <button type="submit">Register</button>
        <div class="forget">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('password.request') }}">Forgot password?</a>
        </div>
    </form>
    <script>
        document.querySelectorAll('.toggle-password').forEach(icon => {
            icon.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);

                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                }
            });
        });
    </script>

@endsection
