<?php


namespace Modules\Blog\Entities;


use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Core\Traits\SeoUrlTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use InteractsWithMedia,NodeTrait, SeoUrlTrait;
    protected $table = 'blog__category';
    protected $fillable = [
        'name',
        'description',
        'content',
        'is_published',
        'publish_at',
        'parent_id',
    ];

    protected $casts = [
        'is_published'  =>  'boolean'
    ];

    public function getUrl()
    {
        return route('blog.web.category.show', $this->id);
    }

    public function setSlugName()
    {
        return $this->name;
    }
    public function posts(){
        return $this->belongsToMany( Post::class, 'blog__category_post', 'post_id', 'category_id');
    }

    public function prioritySiteMap()
    {
        return '0.8';
    }
}

