<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\Admin\RegistrationRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm ()
    {
        return view('admin.login');
    }

    public function login (LoginRequest $request): RedirectResponse
    { 
        if ($request->authenticate()) {
            $request->session()->regenerate();
            
            return redirect()->route('admin.tarif_index');
        }

        return back()->withErrors([
            'email' => 'Предоставленные учетные данные не соответствуют нашим записям.',
        ])->onlyInput('email');
    }

    public function registrationForm()
    {
        return view('admin.registration');
    }

    public function registration(RegistrationRequest $request): RedirectResponse
    {
        User::create($request->validated());

        return redirect()->route('login');
    }

    public function logout(): RedirectResponse
    {
        auth('admin')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('admin.index');
    }
}
