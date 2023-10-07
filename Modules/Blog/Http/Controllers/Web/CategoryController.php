<?php


namespace Modules\Blog\Http\Controllers\Web;


use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;

class CategoryController extends Controller
{
    public function show($id){
        $category = Category::with('media')->where('is_published', true)->find($id);
        $posts = Post::whereHas('categories', function ($query) use ($category){
            $query->where('category_id',$category->id);
        })->paginate(30);
        if ($category){
            return view("blog::web.category.index", compact('category', 'posts'));
        }
    }
}
