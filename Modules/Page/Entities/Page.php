<?php
namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Core\Traits\SeoUrlTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    use InteractsWithMedia, SeoUrlTrait, NodeTrait;
    protected $table = 'pages';
    protected $fillable = [
        'name',
        'description',
        'content',
        'is_published',
        'page_layout'
    ];

    public function getUrl()
    {
        return route('page.web.show', $this->id);
    }

    public function setSlugName()
    {
        return $this->name;
    }

    public function prioritySiteMap()
    {
        if ($this->page_layout == 'home'){
            return '1.0';
        }else{
            return '0.86';
        }
    }
}
