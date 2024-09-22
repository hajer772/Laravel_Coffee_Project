<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class APILocalizationMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if( $request->header('locale') == 'en'){
            App::setLocale('en');
        }else{
            App::setLocale('ar');
        }
        return $next($request);
    }
}
