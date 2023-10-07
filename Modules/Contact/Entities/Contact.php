<?php


namespace Modules\Contact\Entities;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'full_name',
        'first_name',
        'last_name',
        'phone',
        'email',
        'subject',
        'message',
        'data',
    ];

}
