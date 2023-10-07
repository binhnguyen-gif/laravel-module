<?php


namespace Modules\Page\Http\Controllers\Web;


use Illuminate\Routing\Controller;
use Modules\Page\Entities\Page;
use Modules\Page\Facades\PageLayout;

class PageController extends Controller
{
    public function show($id){
        $page = Page::with(['media'])->where('is_published', true)->find($id);
        if ($page){
            $view = PageLayout::findView($page->page_layout);
            if ($view){
                return view($view, compact('page'));
            }
        }
        abort(404);
    }
}
