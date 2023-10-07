<?php

namespace Modules\Core\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\SeoUrl;

class SitemapController extends Controller
{
    public function generate(Request $request)
    {
        $urls = SeoUrl::orderByDesc('priority')->get()->chunk(100);
        return response(view('core::web.sitemap', compact('urls'))->render(), 200, [
            'content-type' => 'application/xml',
        ]);
    }

}
