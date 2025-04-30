<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Modules\Core\app\Methods\CoreHelperClass;
use Symfony\Component\HttpFoundation\Response;

class ShareCommonData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $moduleNames = CoreHelperClass::getModuleName();
        View::share('moduleNames', $moduleNames);
        return $next($request);
    }
}
