<?php


namespace Modules\Blog\Entities;


use Illuminate\Database\Eloquent\Model;
use Modules\Core\Traits\SeoUrlTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia, SeoUrlTrait;
    protected $table = 'blog__post';

    protected $fillable = [
        'name',
        'description',
        'content',
        'is_published',
        'publish_at',
        'total_view',
        'author'
    ];

    protected $casts = [
        'is_published'  =>  'boolean'
    ];

    public function getUrl()
    {
        return route('blog.web.post.show', $this->id);
    }

    public function setSlugName()
    {
        return $this->name;
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'blog__category_post');
    }

    public function hashtags(){
        return $this->belongsToMany(Hashtag::class, 'blog__hashtag_post');
    }

    public function prioritySiteMap()
    {
        return '0.64';
    }
}
