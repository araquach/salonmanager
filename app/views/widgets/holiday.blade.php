<!--holiday widget partial view-->

<ul class="info">
<li class="hidden">Holiday Entitlement:  {{ $entitlement }} days</li>
<li class="hidden">Total Booked: {{ $total }} days</li>
<li class="hidden">Remaining Saturdays: {{ $saturday }} </li>
<li>{{ $remaining }} days remaining</li>
<li>Hello {{ $name->first_name }} {{ $name->second_name }}</li>
</ul>