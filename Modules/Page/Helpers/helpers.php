<?php

if (!function_exists('get_page_layout')){
    function get_page_layout(){
        $pageLayout = PageLayout::getAll();
        return $pageLayout;
    }
}
