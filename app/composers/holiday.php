<?php

View::composer('widgets.holiday', function ($view)
{
    $total = Holiday::all()->count();
    $entitlement = 7;
    $remaining = 13;
    $saturday = 1;
    
    $view->with(array('total'=>$total, 'entitlement'=>$entitlement, 'remaining'=>$remaining, 'saturday'=>$saturday));
});