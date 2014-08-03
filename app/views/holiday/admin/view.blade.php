@extends('layouts.main')

@section('content')

<div class="detail holiday">

<ul>
	<li>Days Requested: {{ $holiday->hours_requested }}</li>
	<li>From: {{ $holiday->fromrequested_date_from }}</li>
	<li>To: {{ $holiday->requested_date_to }}</li>
	<li>Approved? {{ $holiday->approved }}</li>
	<li>Saturday? {{--  saturday function --}}</li>
</ul>

</div> <!-- detail holiday  -->

@stop