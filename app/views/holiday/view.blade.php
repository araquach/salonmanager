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

<table class="detail-view">
	<tr>
		<td><strong>Days Requested:</strong></td>
		<td>{{ $holiday->hours_requested }}</td>
	</tr>
	<tr>
		<td><strong>From:</strong></td>
		<td>{{ $holiday->request_date_from->toFormattedDateString() }}</td>
	</tr>
	<tr>
		<td><strong>To:</strong></td>
		<td>{{ $holiday->request_date_to->toFormattedDateString() }}</td>
	</tr>
	<tr>
		<td><strong>Approved?:</strong></td>
		<td>{{ $holiday->approved ? 'Yes' : 'No' }}</td>
	</tr>
	{{--  saturday function to show icon--}}
</table>


{{ HTML::link('/holiday/index', "Back to list") }}

</div> <!-- detail holiday  -->


@stop