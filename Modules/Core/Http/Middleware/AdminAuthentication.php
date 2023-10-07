<?php


namespace Modules\Core\Http\Middleware;


use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Factory as Auth;

class AdminAuthentication extends Middleware
{
    /**
     * The authentication factory instance.
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    protected $guard = 'admin';

    /**
     * Create a new middleware instance.
     * @param \Illuminate\Contracts\Auth\Factory $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param $request
     * @param  Closure  $next
     * @param ...$guards
     * @return mixed
     * @throws AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards[] = $this->guard;
        $this->authenticate($request, $guards);

        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('core.admin.login');
        }
    }
}
