<?php

namespace App\Http\Middleware;

use Closure;
use App\Profile;

class CheckERPRole
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
        $profile = new Profile();
        $job = $profile->getJob();

        if($job != 'CEO' && $job != 'ERP/CRM'){
            return redirect(route('forbidden'));
        }

        return $next($request);

    }
}
