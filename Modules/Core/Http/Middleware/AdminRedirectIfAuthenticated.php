<?php


namespace Modules\Core\Http\Middleware;


use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guard
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, \Closure $next, $guard = 'admin')
    {
        if ($request->input('skip') == 'rewrite' || $request->is('admin/*')) {
            return $next($request);
        }
        if (Auth::guard($guard)->check()){
            return redirect('admin');
        }

        return $next($request);
    }
}
