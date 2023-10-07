<?php


namespace Modules\Core\Http\Middleware;

use Closure;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Core\Entities\SeoUrl;

class SeoUrlMiddleware
{
    public function handle(Request $request, \Closure $next)
    {
        if ($request->input('skip') == 'rewrite' || $request->is('admin/*')) {
            return $next($request);
        }

        if ($this->isSeoFriendlyUrl($request)) {
            return $next($request);
        }
        if ($toUrl = $this->getSeoFriendlyUrl($request)) {
            return redirect($toUrl, 301);
        }

        return $next($request);
    }

    protected function isSeoFriendlyUrl(Request $request)
    {
        return Route::getRoutes()->match($request)->isFallback;
    }

    protected function getSeoFriendlyUrl(Request $request)
    {
        try {
            $targetPath = ltrim(parse_url($request->path(), PHP_URL_PATH), '/');

            /** @var SeoUrl $seourl */
            $seourl = SeoUrl::where('target', $targetPath)->first();
            if ($seourl) {
                $toUrl = implode('?', array_filter([
                    $seourl->slug,
                    $request->getQueryString()
                ]));
                return $toUrl;
            }
        } catch (QueryException $e) {
            // Do No Thing
        }

        return null;
    }
}
