<?php


namespace Modules\Menu\Entities;


use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class MenuItem extends Model
{
    use NodeTrait;
    protected $table = 'menu_item';
    protected $fillable = [
        'menu_id',
        'name',
        'icon',
        'class',
        'target',
        'builder_type',
        'builder_id',
        'url',
        'menu_item_label',
        'parent_id',
    ];

    public function builder(){
        return $this->morphTo();
    }
}
