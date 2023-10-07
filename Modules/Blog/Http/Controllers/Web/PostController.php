<?php


namespace Modules\Blog\Http\Controllers\Web;


use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Post;

class PostController extends Controller
{
    use SEOTools;
    public function show($id){
        $post = Post::with(['media', 'seoUrl'])->where('is_published', true)->find($id);
        if (!$post){
            abort(404);
        }
        // SEO DATA
        $this->seo()->setTitle($post->name);
        $this->seo()->setCanonical($post->url);
        $this->seo()->setDescription($post->description);
        $this->seo()->addImages($post->image);
        $this->seo()->twitter()->setTitle($post->name);
        $this->seo()->twitter()->setDescription($post->description);
        $this->seo()->twitter()->setImage($post->image);
        $this->seo()->jsonLd()->setType('Article');


        if ($post){
            return view("blog::web.post.index", compact('post'));
        }
    }
}
