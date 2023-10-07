<?php

namespace Modules\Account\Entities;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    protected $table = 'accounts';
    protected $fillable = [
        'name',
        'type',
        'email',
        'password'
    ];

}
