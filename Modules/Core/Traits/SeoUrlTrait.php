<?php


namespace Modules\Core\Traits;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Modules\Core\Entities\SeoUrl;

trait SeoUrlTrait
{
    protected $seoableAttributes = [];
    protected $modelSeourls;
    abstract public function getUrl();
    abstract public function setSlugName();
    abstract public function prioritySiteMap();

    public function initializeSeoUrlTrait()
    {
        $this->fillable[] = 'url';
    }
    public function setUrlAttribute($value)
    {
        $this->seoableAttributes['slug'] = $value;
    }
    public function getUrlAttribute()
    {
        if (method_exists($this, 'getUrl')) {
            $targetPath = ltrim(parse_url($this->getUrl(), PHP_URL_PATH), '/');

            $seourls = $this->getSeoUrls($targetPath);

            $seourl = $seourls->where('locale', App::getLocale())->first();
            if (!$seourl) {
                $seourl = $seourls->first();
            }

            $seoUrl = object_get($seourl, 'slug', $targetPath);

            return '/'.$seoUrl;
        }
        return '/'.$this->slug;
    }
    protected function getSeoUrls(string $targetPath)
    {
        if (!$this->modelSeourls) {
            $this->modelSeourls = SeoUrl::where('target', $targetPath)->get();
        }

        return $this->modelSeourls;
    }
    public static function bootSeoUrlTrait(){

        static ::saved(function (self $model){
            $model->saveSlug();
        });

        static ::deleted(function (self $model){
            if ($model->seoUrl){
                $model->seoUrl->delete();
            }
        });
    }

    private function saveSlug(){
        if ($this->seoableAttributes['slug']){
            $slug = $this->reGenerateSlug($this->seoableAttributes['slug']);
        }else{
            $slug = $this->generateSlug();
        }
        if ($this->seoUrl){
            $this->seoUrl()->update([
                'slug'  =>  $slug,
            ]);
        }else{
            $this->seoUrl()->create([
                'slug'  =>  $slug,
                'target'    =>  $this->getUrl(),
                'locale'    =>  null,
                'priority'   => $this->prioritySiteMap()
            ]);
        }
    }

    private function generateSlug(){
        $slugName = $this->setSlugName();
        $slug = Str::slug($slugName, '-');
        $checkSlugExits = $this->checkSlug($slug);
        if (!$checkSlugExits){
            return $slug;
        }else{
            $i = 1;
            while (true){
                $slug = Str::slug($slugName, '-').'-'.$i;
                $checkSlugExits = $this->checkSlug($slug);
                if (!$checkSlugExits){
                    return $slug;
                }
                $i++;
            }
        }
    }

    private function reGenerateSlug($slug){
        $checkSlugExits = $this->checkSlug($slug);
        if (!$checkSlugExits){
            return $slug;
        }else{
            $i = 1;
            while (true){
                $slug = Str::slug($slug, '-').'-'.$i;
                $checkSlugExits = $this->checkSlug($slug);
                if (!$checkSlugExits){
                    return $slug;
                }
                $i++;
            }
        }
    }

    private function checkSlug($slug){
        $url = SeoUrl::where('slug', $slug)->first();
        if ($this->seoUrl && ($slug === $this->seoUrl->slug)){
            return false;
        }
        if ($url){
            return true;
        }else{
            return false;
        }
    }

    public function seoUrl(){
        return $this->morphOne(SeoUrl::class, 'url');
    }

}
