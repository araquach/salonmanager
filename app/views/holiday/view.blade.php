@extends('layouts.main')

@section('content')

<div class="detail holiday">

<ul>
	<li>Days Requested: {{ $holiday->hours_requested }}</li>
	<li>From: {{ $holiday->request_date_from->toFormattedDateString() }}</li>
	<li>To: {{ $holiday->request_date_to->toFormattedDateString() }}</li>
	<li>Approved? {{ $holiday->approved }}</li>
	<li>Saturday? {{--  saturday function --}}</li>
</ul>

{{ HTML::link('/holiday/index', "Back to list") }}

</div> <!-- detail holiday  -->


@stop