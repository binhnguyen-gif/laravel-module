<?php


namespace Modules\Core\Http\Controllers\Web;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Modules\Core\Entities\SeoUrl;
use Modules\Core\Repositories\UrlRepositoryInterface;

class UrlRewriteController
{
    /**
     * @var UrlRepositoryInterface
     */
    protected $urlRepository;


    public function __construct(UrlRepositoryInterface $urlRepository)
    {
        $this->urlRepository = $urlRepository;
    }

    public function __invoke(Request $request, $path = null)
    {
        $path = ltrim(rtrim($path, '/'), '/') ?: '/';
        try {
            $targetPath = $this->getTargetPath($path);

            $params = $request->input();
            $params['skip'] = 'rewrite';

            return Route::dispatchToRoute(Request::create($targetPath, 'GET', $params, $_COOKIE));
        } catch (\Exception $e) {
            if ($path === '/' && view()->exists('core::web.home')) {
                return view('core::web.home');
            }
        }
        return abort(404);
    }

    protected function getTargetPath($path)
    {
        $matchRequestPath = $this->urlRepository->whereMathRequestPath($path);

        /** @var SeoUrl $urlRewrite */
        $urlRewrite = $matchRequestPath->where('locale', App::getLocale())->first();

        if (!$urlRewrite) {
            $urlRewrite = $matchRequestPath->first();
        }

        if (!$urlRewrite) {
            throw new ModelNotFoundException();
        }
        return $urlRewrite->target;
    }
}
