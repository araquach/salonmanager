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
	<li>Days Requested: {{ $holiday->hours_requested }}</li>
	<li>From: {{ $holiday->request_date_from->toFormattedDateString() }}</li>
	<li>To: {{ $holiday->request_date_to->toFormattedDateString() }}</li>
	<li>Approved? {{ $holiday->approved ? 'Yes' : 'No' }}</li>
	<li>{{--  saturday function to show icon--}}</li>
</ul>

{{ HTML::link('/holiday/index', "Back to list") }}

</div> <!-- detail holiday  -->


@stop