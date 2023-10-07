<?php


namespace Modules\Menu\Facades;


use Illuminate\Support\Facades\Facade;

class MenuBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "MenuBuilder";
    }
}
