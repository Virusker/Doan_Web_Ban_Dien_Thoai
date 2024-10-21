<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Users_admin;
class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            // return route('login'); // Thay đổi route login mặc định
            return redirect('/login');
        }

        // if ($request->input('token') !== 'my-secret-token') {
        //     return redirect('/login');
        // }
        return $next($request);
    }

    public function admin_check(Request $request, Closure $next): Response
    {
        // if (users_admin::where('id', Auth::id())->first()->role != 'admin') {
        //     return redirect('/login');
        // }
        return 'ok';
        // return $next($request);
    }

}
