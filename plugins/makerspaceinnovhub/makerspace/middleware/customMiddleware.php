<?php namespace makerspaceInnovhub\Makerspace\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class CustomMiddleware
{
    public function handle($request, Closure $next)
    {
        $apiKey = $request->header('MAKERSPACE-API');

        if ($apiKey !== env('PRIVATE_API_KEY')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        Log::info('CustomMiddleware is processing the request.');
        return $next($request);
    }
  }