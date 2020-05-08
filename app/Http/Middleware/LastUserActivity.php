<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Auth;


class LastUserActivity {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $date = Carbon::now()->timezone('egypt');
        if (auth()->check() && auth()->user()->last_activity < $date->subMinutes(5)->format('H:i:s')) {
            $user = auth()->user();
            $user->last_activity = now()->timezone('egypt');
            $user->update();
        }
        return $next($request);
    }

}
