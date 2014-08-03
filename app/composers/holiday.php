<?php

View::composer('widgets.holiday', function ($view)
{
    $total = Holiday::where('staff_id', '=', Auth::id())->get()->sum('hours_requested');
    
    $entitlement = Staff::where('id', '=', Auth::id())->get()->sum('holiday_entitlement');
    
    $remaining = $entitlement - $total;
    
    $saturday = 4;
    
    $view->with(array('total'=>$total, 'entitlement'=>$entitlement, 'remaining'=>$remaining, 'saturday'=>$saturday));
});