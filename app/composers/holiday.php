<?php

View::composer('widgets.holiday', function ($view)
{
    $total = Holiday::sum('hours_requested');
    
    $entitlement = 20;
    
    $remaining = $entitlement - $total;
    
    $saturday = 1;
    
    $view->with(array('total'=>$total, 'entitlement'=>$entitlement, 'remaining'=>$remaining, 'saturday'=>$saturday));
});