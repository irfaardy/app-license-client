<?php

namespace Irfa\AppLicenseClient\Middleware;

use Closure;
use Irfa\AppLicenseClient\Facades\AppLicenseClient as AppLicense;

class AppLicenseChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(AppLicense::check()){
            return $next($request);
        }
        $license = AppLicense::get();
        return abort(503,$license->message);

    }
}
