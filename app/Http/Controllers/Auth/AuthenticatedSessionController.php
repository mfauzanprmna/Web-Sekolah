<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (Auth::guard('manager')->attempt(['nik' => $request->username, 'password' => $request->password])) {
            return redirect('manager/dashboard');
        } elseif (Auth::guard('guru')->attempt(['nik' => $request->username, 'password' => $request->password])) {
            return redirect('guru/dashboard');
        } elseif (Auth::guard('siswa')->attempt(['nipd' => $request->username, 'password' => $request->password])) {
            return redirect('siswa/dashboard');
        } elseif (Auth::guard('web')->attempt(['email' => $request->username, 'password' => $request->password])) {
            return redirect('/admin');
        }

        return redirect('/login');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('guru')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
