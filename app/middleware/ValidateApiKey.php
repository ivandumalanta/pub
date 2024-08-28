<?php namespace MyVendor\MyPlugin\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class ValidateApiKey
{
    
    public function handle($request, Closure $next)
    {
        // Perform any logic you need before the request is processed
        Log::info('CustomMiddleware is processing the request.');

        // Continue to the next middleware or the request handler
        return $next($request);
    }
}
