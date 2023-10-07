<?php

namespace Modules\Core\Repositories\Eloquent;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Modules\Core\Entities\Setting;
use Modules\Core\Repositories\SettingRepositoryInterface;

class SettingRepository implements SettingRepositoryInterface
{
    protected $loaded = false;

    protected $data = [];

    public function has($name)
    {
        $this->load();

        return Arr::has($this->data, $name);
    }

    public function get($name, $default = null)
    {
        $this->load();

        return Arr::get($this->data, $name, $default);
    }

    public function load($force = false)
    {
        if (!$this->loaded || $force) {
            $this->data = $this->read();
            $this->loaded = true;
        }
    }

    protected function read()
    {
        if ($this->checkDatabaseConnection()) {
            return $this->parseReadData(Setting::with('media')->get());
        }

        return [];
    }

    protected function parseReadData($data)
    {
        $results = [];

        foreach ($data as $row) {
            $name = $row->name;
            $value = $row->value;
            $type = $row->type;
            if ($type == Setting::TYPE_IMAGE){
                if ($row->hasMedia($row->key)){
                    $value =  $row->getMedia($row->key)->last()->getUrl();
                }else{
                    $value = '';
                }
            }

            Arr::set($results, $name, $value);
        }

        return $results;
    }

    private function checkDatabaseConnection()
    {
        try {
//            return DB::connection()->getPdo() && Schema::hasTable('settings');
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
