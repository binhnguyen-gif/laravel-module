<?php


namespace Modules\Core\Entities;


use Illuminate\Database\Eloquent\Model;

class SeoUrl extends Model
{
    protected $table = 'seo__url';
    protected $fillable = [
        'prefix',
        'slug',
        'target',
        'locale',
        'priority'
    ];

    public function url(){
        return $this->morphTo();
    }

    public function setTargetAttribute($value)
    {
        $this->attributes['target']  = ltrim(parse_url($value, PHP_URL_PATH), '/');
    }

}
