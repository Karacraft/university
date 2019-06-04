<?php

namespace App\Http\Middleware;

use App\Helpers\Constants;
use Closure;
use Illuminate\Support\Facades\Auth;

class OperationAndFinance
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
        if(Auth::user()->role_id != Constants::SUPER_ADMIN || Auth::user()->role_id != Constants::CAN_ACCESS_OPS_AND_FINANCE)
        {
            //  User Cannot Access the Resource
            abort(403,'You are not authorized to access this page!');
        }
        return $next($request);
    }
}
