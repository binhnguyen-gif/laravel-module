<?php


namespace Modules\Core\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use Modules\Core\Entities\Admin;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param                          $permission
     * @return mixed
     */
    public function handle($request, \Closure $next, $permission)
    {
        /** @var Admin $admin */
        $admin = Auth::guard('admin')->user();
        if ($admin && $admin->hasPermission($permission)) {
            return $next($request);
        }

        return abort(403);
    }
}
