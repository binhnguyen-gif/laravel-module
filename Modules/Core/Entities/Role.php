<?php


namespace Modules\Core\Entities;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'description',
        'permissions'
    ];

}
