<?php

View::composer('widgets.holiday', function ($view)
{
    $total = Holiday::sum('hours_requested');
    
    $entitlement = Staff::sum('holiday_entitlement');
    
    $remaining = $entitlement - $total;
    
    $saturday = 4;
    
    $view->with(array('total'=>$total, 'entitlement'=>$entitlement, 'remaining'=>$remaining, 'saturday'=>$saturday));
});