<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class AuthenticatedSessionController extends Controller
{
    // public function redirectTo()
    // {
    //     $user = Auth::user();
        
    //     if (!$user) {
    //         return '/';
    //     }

    //     // Untuk Spatie Package
    //     if ($user->hasRole('admin')) {
    //         return route('admin.dashboard');
    //     }
        
    //     if ($user->hasRole('guru')) {
    //         return route('guru.dashboard');
    //     }
        
    //     if ($user->hasRole('siswa')) {
    //         return route('siswa.dashboard');
    //     }
        
    //     return '/';
    // }
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Validasi
            $request->validate([
                'login' => 'required|string',
                'password' => 'required|string',
            ]);

            // Tentukan apakah login berupa email atau username
            $fieldType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            if (!Auth::attempt([$fieldType => $request->login, 'password' => $request->password], $request->boolean('remember'))) {
                return back()->withErrors([
                    'login' => 'Username/email atau password salah.',
                ])->onlyInput('login');
            }

            $request->session()->regenerate();

            // Redirect sesuai role (contoh saja)
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('guru')) {
                return redirect()->route('guru.dashboard');
            } else {
                return redirect()->route('siswa.dashboard');
            }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
