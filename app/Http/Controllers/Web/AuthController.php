<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\LoginRequest;
use App\Http\Requests\Web\RegistrationRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm ()
    {
        return view('web.login');
    }

    public function login (LoginRequest $request): RedirectResponse
    { 
        if ($request->authenticate()) {
            $request->session()->regenerate();
            
            return redirect()->route('web.user_organization');
        }

        return back()->withErrors([
            'email' => 'Предоставленные учетные данные не соответствуют нашим записям.',
        ])->onlyInput('email');
    }

    public function registrationForm()
    {
        return view('web.registration');
    }

    public function registration(RegistrationRequest $request): RedirectResponse
    {
        User::create($request->validated());

        return redirect()->route('login');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('index');
    }
}
