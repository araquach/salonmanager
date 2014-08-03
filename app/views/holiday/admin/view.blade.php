@extends('layouts.main')

@section('content')

<div class="detail holiday">

<div class="detailCode @if($holiday->approved == 1)
							unapproved
						@elseif($holiday->approved == 2)
							approved
						@else
							pending
						@endif">
</div>


<ul>
	<li>Staff: {{-- get staffs name --}}</li>
	<li>Days Requested: {{ $holiday->hours_requested }}</li>
	<li>Prebooked? {{ $holiday->prebooked ? 'Yes' : 'No'}}</li>
	<li>From: {{ $holiday->request_date_from->toFormattedDateString() }}</li>
	<li>To: {{ $holiday->request_date_to->toFormattedDateString() }}</li>
	<li>Approved? {{ $holiday->approved ? 'Yes' : 'No'}}</li>
	<li>Saturday? {{--  saturday function --}}</li>
	<li>Request Date: {{ $holiday->requested_on_date->toFormattedDateString() }}</li>
</ul>

{{ HTML::link('/admin/holiday/index', "Back to list") }}

</div> <!-- detail holiday  -->

@stop