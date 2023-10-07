<?php
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Hashtag;

if (!function_exists('_get_parent_blog_category')){
    function _get_parent_blog_category(){
        $options = [];

        $categoryTreeList = Category::defaultOrder()->withDepth()->get()->toFlatTree();
        foreach ($categoryTreeList as $item) {
            $options[] = [
                'value' => $item->id,
                'name' => trim(str_pad('', $item->depth * 3, '-')).' '.$item->name,
            ];
        }

        return $options;
    }
}

if (!function_exists('_get_home_news')){
    function _get_home_news($limit = 3){
        $posts = \Modules\Blog\Entities\Post::orderByDesc('id')->take($limit)->get();
        return $posts;
    }
}

if (!function_exists('get_posts_with_paginate')){
    function get_posts_with_paginate($limit = 20){
//        $posts = Post::whereIsActive(true)
//            ->orderBy('id', 'desc')
//            ->paginate($limit);
//        return $posts;
    }
}

if (!function_exists('_format_date')){
    function _format_date($date){
        $date = \Illuminate\Support\Carbon::make($date)->format('d-m-Y');
        return $date;
    }
}
if (!function_exists('_get_feature_posts')){
    function _get_feature_posts($postId){
        $posts = Post::whereIsPublished(true)->whereKeyNot($postId)
            ->orderByDesc('id')->take(5)->get();
        return $posts;
    }
}

if (!function_exists('_get_categories')){
    function _get_categories(){
//        $categories = Category::whereIsActive(true)->get();
//        return $categories;
    }
}

if (!function_exists('_get_array_hashtags')){
    function _get_array_hashtags(){
       return Hashtag::pluck('hashtag')->toArray();
    }
}



if (!function_exists('blog_get_post')){
    /**
     * @param $limit
     * @param $usePagination
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    function blog_get_post($limit, $usePagination = false){
        if ($usePagination){
            $posts = Post::with(['media', 'seoUrl'])->orderByDesc('updated_at')
                ->where('is_published', true)->paginate($limit);
            return $posts;
        }
        $posts = Post::with(['media', 'seoUrl'])->orderByDesc('updated_at')
            ->where('is_published', true)->take($limit)->get();
        return $posts;
    }
}

if (!function_exists('blog_get_categories')){
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    function blog_get_categories(){
        $categories = Category::with(['posts', 'media', 'seoUrl'])->orderByDesc('id')
            ->where('is_published', true)
            ->get();
        return $categories;

    }
}
