<?php
namespace Modules\Core\Services;


class SettingGenerateService
{
    protected $boards = [];

    public function registerBoard($name, $key, $route)
    {
        $data = [
            "name"  =>  $name,
            "key"   =>  $key,
            "route" =>  $route,
        ];
        $this->boards[] = $data;

        return $this;
    }

    public function getBoard(){
        return $this->boards;
    }
}
