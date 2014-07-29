@extends('layouts.main')

@section('content')

<div id="holidayPage">

<div class="pageHead holiday">

@include('widgets.holiday')

</div> <!--.pageHead holiday-->

@foreach($holidays as $holiday)

<div class="view @if($holiday->approved == 1) 
						unapproved 
					@elseif($holiday->approved == 2) 
						approved 
					@else 
						pending 
					@endif" >

	<b>ID: {{ $holiday->id }}</b>
	<br>
	<b>Hours Requested: {{ $holiday->hours_requested }}</p> {{-- hour converter function --}}</b>
	<br />

	<b>Request Date From: {{ $holiday->request_date_from }}</p> {{-- use date formatter --}}</b>
	<br />

	<b>Request Date To: {{ $holiday->request_date_to }}</p> {{-- use date formatter --}}</b>
	<br />
	
	@if($holiday->id == 1) 
	 	<img src="{{ asset('/images/icons/icons_1xsat.png') }}" />
	@elseif($holiday->id == 2) 
		<img src="{{ asset('/images/icons/icons_2xsat.png') }}" />
	@endif
	
	@if($holiday->prebooked ==1) 
		<img src="{{ asset('images/icons/pb-11.png') }}">
	@endif
		
	<br />
</div>

@endforeach

</div> <!--holidayPage-->

@stop