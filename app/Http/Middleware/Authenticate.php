<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        return $request->expectsJson() ? null : route('login','update');
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $response = $next($request);

        if (Auth::check() && !$this->shouldSkipRefresh($response)) {
            // Attempt to refresh the token
            try {
                $newToken = JWTAuth::refresh();
                $this->setTokenInResponse($response, $newToken);
            } catch (\Exception $exception) {
                // Handle token refresh failure (e.g., token is blacklisted)
            }
        }

        return $response;
    }

    /**
     * Check if the response indicates that token refreshing should be skipped.
     *
     * @param  mixed  $response
     * @return bool
     */
    protected function shouldSkipRefresh($response)
    {
        // Add conditions here if token refreshing should be skipped for certain responses
        return false;
    }

    /**
     * Set the refreshed token in the response headers.
     *
     * @param  mixed  $response
     * @param  string  $newToken
     * @return void
     */
    protected function setTokenInResponse($response, $newToken)
    {
        $response->headers->set('Authorization', 'Bearer ' . $newToken);
    }
}
