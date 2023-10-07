<?php


namespace Modules\Page\Facades;


use Illuminate\Support\Facades\Facade;

class PageLayout extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'PageLayout';
    }
}
