<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('admin')->check()) {
            return redirect('admin.login')->with('error', 'Silahkan login sebagai admin terlebih dahulu.');
        }
        return $next($request);
    }

    protected function redirectTo($request)
    {
        // Jika rute mengarah ke admin
        if ($request->is('admin/*')) {
            return '/admin/login';
        }

        // Rute default untuk pengguna umum
        return route('admin.login');
    }

}

