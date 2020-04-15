<?php
if (!function_exists('pages_title')){
    function pages_title($titre)
    { if ($titre ===''){
        return 'laracarte-list of artisans';
    }else{
        return $titre.'|'.'laracarte-list of artisans';
    }
    }
}