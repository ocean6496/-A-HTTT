<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $page)
    { 
        $username = Auth::user()->username;
        $pos = strpos($role, $username);
        if ($pos === false) {
            return redirect()->route("admin.$page.index")->with('msg', 'Bạn không được quyền thực hiện chức năng này!');
        }

        return $next($request);
    }
}
