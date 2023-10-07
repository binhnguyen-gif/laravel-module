<?php


namespace Modules\Core\Facades;


use Illuminate\Support\Facades\Facade;

class AdminPermission extends Facade
{
    public static function getFacadeAccessor()
    {
        return "AdminPermission";
    }
}
