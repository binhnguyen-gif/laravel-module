<?php

if (!function_exists('get_target_menu')){
    function get_target_menu(){
        return [
            [
                'name'  =>  '_self',
                'value' =>  '_self'
            ],
            [
                'name'  =>  '_blank',
                'value' =>  '_blank'
            ]
        ];
    }
}
