<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = session()->get('lang', config('app.locale'));
        if (! in_array($lang, ['en', 'vi'])) {
            abort(400);
        }
        App::setLocale($lang);
        
        return $next($request);
    }
}
