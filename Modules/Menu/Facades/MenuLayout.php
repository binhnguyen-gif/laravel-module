<?php


namespace Modules\Menu\Facades;


use Illuminate\Support\Facades\Facade;

class MenuLayout extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "MenuLayout";
    }
}
