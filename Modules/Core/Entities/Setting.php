<?php


namespace Modules\Core\Entities;


use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia;

    const TYPE_INPUT = 'input';
    const TYPE_SELECT = 'select';
    const TYPE_EDITOR = 'editor';
    const TYPE_IMAGE = 'image';
    const TYPE_CHECKBOX = 'checkbox';

    protected $table = 'settings';
    protected $fillable = [
        'name',
        'key',
        'type',
        'value',
    ];

}
