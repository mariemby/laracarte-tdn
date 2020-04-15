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
if (!function_exists('set_active_route')){
    function set_active_route($route)
    { 
        return Route::is($route) ?'active':'';
  
}
}