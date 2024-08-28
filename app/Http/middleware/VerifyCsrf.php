<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class VerifyCsrf
{
    
    public function handle($request, Closure $next)
    {
        if ($request->isMethod('post')) {
            $token = $request->header('MAKERSPACE-CSRF-TOKEN') ?: $request->input('_token');

            if ($token !== Session::token()) {
                return response()->json(['message' => 'CSRF token mismatch'], 403);
            }
        }

        return $next($request);
    }
}