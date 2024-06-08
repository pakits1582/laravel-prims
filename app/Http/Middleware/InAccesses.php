<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class InAccesses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $access)
    {
        $inaccess = UserAccess::where('access', $access)->where('user_id', Auth::id())->get();

        if (!$inaccess->isEmpty()) {
            return $next($request);
        }

        return redirect('home');
    }
}
