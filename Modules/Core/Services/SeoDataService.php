<?php


namespace Modules\Core\Services;


use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class SeoDataService
{
    public function generate($item, $type = 'articles'){

        SEOTools::setTitle($item->name);
        SEOMeta::setDescription($item->description);
        \SEO::setDescription($item->description);
        SEOTools::opengraph()->setUrl($item->url == '//' ? url('/') : url($item->url));
        SEOTools::setCanonical($item->url == '//' ? url('/') : url($item->url));
        OpenGraph::addProperty('locale', 'vi_VN');
        OpenGraph::setSiteName(env('APP_NAME'));
        SEOTools::opengraph()->addProperty('type', $type);

        if ($type == 'articles'){
            OpenGraph::setTitle($item->name)
                ->setDescription($item->description)
                ->setType('article')
                ->setArticle([
                    'published_time' => $item->created_at,
                    'modified_time' => $item->updated_at,
                    'author' => 'Hozitech',
                ]);
            JsonLdMulti::setTitle($item->name);
            JsonLdMulti::setDescription($item->description);
            JsonLdMulti::setType('Article');
            if ($item->hasMedia('image')) {
                JsonLdMulti::addImage($item->getMedia('image')->last()->getUrl());
            }
            if ($item->hasMedia('gallery')) {
                JsonLdMulti::addImage($item->getMedia('gallery')->last()->getUrl());
            }

            if(! JsonLdMulti::isEmpty()) {
                JsonLdMulti::newJsonLd();
                JsonLdMulti::setType('WebPage');
                JsonLdMulti::setTitle('Page Article - '.$item->name);
            }
        }

        if ($item->hasMedia('image')){
            OpenGraph::addImage($item->getMedia('image')->last()->getUrl());
            SEOTools::twitter()->setImage($item->getMedia('image')->last()->getUrl());
        }
        if ($item->hasMedia('gallery')){
            OpenGraph::addImage($item->getMedia('gallery')->last()->getUrl());
            SEOTools::twitter()->setImage($item->getMedia('gallery')->last()->getUrl());
        }

        return \SEO::generate();

    }
}
