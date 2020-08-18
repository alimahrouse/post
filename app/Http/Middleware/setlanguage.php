<?php

namespace App\Http\Middleware;

use Closure;
use App;

class setlanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$lang='en')
    {
        \App::setlocale($lang);
       // $route = $request->route('lang');
      // $route=$request->lang;
      // dd($lang);
      
        return $next($request);
    }
}
