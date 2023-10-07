<?php


namespace Modules\Core\Entities;


use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{
    protected $table = 'admin_settings';
    protected $fillable = [
        'key',
        'value'
    ];

    // theme
    // theme config
}
