<?php


namespace Modules\Menu\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = [
        'name',
        'key',
        'view'
    ];

    protected $appends = ['code'];

    public function getCodeAttribute(){
        $key = $this->key;
        return "<code> {!! MenuBuilder::render('".$key."', '') !!}</code>";
    }

    public function menuItem(){
        return $this->hasMany(MenuItem::class, 'menu_id');
    }

}
