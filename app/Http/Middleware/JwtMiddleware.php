<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Exception;

class JwtMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return failureResponse([], "Token is Invalid", 403);
            } elseif (
                $e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException
            ) {
                return failureResponse([], "Token is Expired", 403);
            } else {
                return failureResponse(
                    [],
                    "Authorization Token not found",
                    400
                );
            }
        }
        return $next($request);
    }
}
