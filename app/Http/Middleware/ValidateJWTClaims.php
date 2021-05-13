<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\UnauthorizedException;

/**
 * jwt-auth library validates token and signature. Here we ensure the audience claims are as expected.
 */
class ValidateJWTClaims
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        $user = auth('api')->user();

        if ($user !== null) {
            $this->validateClaims();
        }

        return $next($request);
    }

    private function validateClaims()
    {
        if (App::environment('testing')) {
            return;
        }

        $payload = auth('api')->payload();
        $aud = $payload['aud'];

        if (!Arr::first($aud, function ($item) {
            return strcmp($item, env('AUTH0_API_ID')) == 0;
        })) {
            throw new UnauthorizedException();
        }

    }
}
