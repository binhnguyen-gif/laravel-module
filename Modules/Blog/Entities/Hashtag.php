<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hashtag extends Model
{
    use HasFactory;

    protected $table = 'blog__hashtag';
    protected $fillable = [
        'hashtag'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\HashtagFactory::new();
    }

    public function posts(){
        return $this->belongsToMany( Post::class, 'blog__hashtag_post', 'post_id', 'hashtag_id');
    }
}
