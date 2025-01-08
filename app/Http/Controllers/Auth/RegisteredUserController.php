<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Konsumen;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'no-telp' => ['required', 'string', 'max:13'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Konsumen::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $konsumen = Konsumen::create([
            'name' => $request->name,
            'no-telp' => $request->notelp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($konsumen));

        Auth::guard('konsumen')->login($konsumen);

        return redirect(route('dashboard', absolute: false));
    }
}
