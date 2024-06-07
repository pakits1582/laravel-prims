<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
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
        $credentials = $request->only('idno', 'password');
        if (Auth::attempt($credentials + ['status' => 1])) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->with(['alert-class' => 'red', 'message' => 'Sorry we didn\'t recognized your login details. Please check idno and password and try again!'])->withInput();
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function home()
    {
        if (Auth::check()) {
            return view('home', ['title' => 'Home Page']);
        }

        return redirect('/');
    }
}
